// client id 
const CLIENT_ID = '01f40b1ef763464fbd314a4da2535c38';
const CLIENT_SECRET = '4c313df3024d4155ae7ce53479e94ac1';

// endpoints
const TOKEN_URL = 'https://accounts.spotify.com/api/token';
const TRACK_URL = 'https://api.spotify.com/v1/tracks/';
const ARTIST_URL = 'https://api.spotify.com/v1/artists/';
const ALBUMS_URL = 'https://api.spotify.com/v1/albums/';
const AUDIO_FEATURES_URL = 'https://api.spotify.com/v1/audio-features/';
const RECOMMENDATIONS_URL = 'https://api.spotify.com/v1/recommendations';

// grab access token using client credentials
async function getAccessToken() {
    const response = await fetch(TOKEN_URL, {
        method: 'POST',
        headers: {
            'Authorization': 'Basic ' + btoa(CLIENT_ID + ':' + CLIENT_SECRET),
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'grant_type=client_credentials',
    });

    const data = await response.json();
    return data.access_token;
}

// function to get recommendations
async function getTrackRecommendations(trackId) {
    const accessToken = await getAccessToken();

    const response = await fetch(`${RECOMMENDATIONS_URL}?seed_tracks=${trackId}&limit=5`, {
        headers: {
            'Authorization': 'Bearer ' + accessToken,
        },
    });

    if (response.status === 200) {
        const data = await response.json();
        const recommendations = data.tracks.map(track => ({
            id: track.id,
            name: track.name,
            artists: track.artists.map(artist => artist.name).join(', '),
            album: track.album.name,
            albumCover: track.album.images[0].url,
        }));

        const recommendationsHTML = recommendations.map(recommendation => `
            <div class="recommendation-tile">
                <a href="#" data-track-id="${recommendation.id}" class="track-link">
                    <img src="${recommendation.albumCover}" alt="Album Cover" width="100" height="100">
                    <p>Track Name: ${recommendation.name}</p>
                    <p>Artist(s): ${recommendation.artists}</p>
                    <p>Album: ${recommendation.album}</p>
                </a>
            </div>
        `).join('');

        document.getElementById('recommendationsContainer').innerHTML = `<h2>Recommended Tracks:</h2><div class="tile-container">${recommendationsHTML}</div>`;

        // add event listeners to the track links
        const trackLinks = document.querySelectorAll('.track-link');
        trackLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const trackId = this.getAttribute('data-track-id');
                window.open(`https://open.spotify.com/track/${trackId}`, '_blank');
               
            });
        });
    } else {
        document.getElementById('recommendationsContainer').innerHTML = '<p>Recommendations not found or error occurred.</p>';
    }
}

// function to get a track and get its name and data
async function searchTrack(trackId) {
    const accessToken = await getAccessToken();


    // Get the track information
    const trackResponse = await fetch(`${TRACK_URL}${trackId}`, {
        headers: {
            'Authorization': 'Bearer ' + accessToken,
        },
    });

    if (trackResponse.status === 200) {
        const trackData = await trackResponse.json();
        const trackName = trackData.name;
        const artists = trackData.artists.map(artist => artist.name).join(', ');
        const albums = trackData.album.name
        // get the audio features for the track
        const audioFeaturesResponse = await fetch(`${AUDIO_FEATURES_URL}${trackId}`, {
            headers: {
                'Authorization': 'Bearer ' + accessToken,
            },
        });

        function formatDuration(duration_ms) {
            const totalSeconds = Math.floor(duration_ms / 1000);
            const minutes = Math.floor(totalSeconds / 60);
            const seconds = totalSeconds % 60;
            return `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        } 

        if (audioFeaturesResponse.status === 200) {
        const audioFeaturesData = await audioFeaturesResponse.json();
        const duration_ms = audioFeaturesData.duration_ms || 'Not available';
        const formattedDuration = formatDuration(duration_ms);
        


        document.getElementById('resultContainer').innerHTML = 
        `<p>TRACK/ARTIST/ALBUM: ${trackName} - ${artists} - ${albums}</p> 
        <p>Duration: ${formattedDuration}</p>`;
    } else {
        document.getElementById('resultContainer').innerHTML = '<p>Audio features not found or error occurred.</p>';
    }
    } else {
        document.getElementById('resultContainer').innerHTML = '<p>Track not found or error occurred.</p>';
    }
}

// handle the search button click event
function handleSearchButtonClick() {
    const linkInput = document.getElementById('trackLink').value;
    
    
    // extract the track ID from the link (e.g., from a Spotify URL)
    const trackId = extractTrackIdFromLink(linkInput);
    
    // check if a valid track ID was extracted
    if (trackId) {
        searchTrack(trackId);
        getTrackRecommendations(trackId);
    } else {
        // Handle invalid input or provide feedback to the user
        document.getElementById('resultContainer').innerHTML = '<p>Invalid link or error occurred.</p>';
    }
}

function extractTrackIdFromLink(link) {
    
    const trackIdMatch = link.match(/\/track\/(\w+)/);

    const fullLinkMatch = link.match(/\/track\/(\w+)\?si=/);

    if (trackIdMatch && trackIdMatch[1]) {
        return trackIdMatch[1]; 
    } else if (fullLinkMatch && fullLinkMatch[1]) {
        return fullLinkMatch[1]; 
    } else {
        return null; 
    }
}

// function to export JSON data
function exportJson() {
    const recommendationsContainer = document.getElementById('recommendationsContainer');
    const trackRecommendations = Array.from(recommendationsContainer.querySelectorAll('.recommendation-tile')).map(tile => {
        return {
            name: tile.querySelector('p:nth-of-type(1)').innerText.replace('Track Name: ', ''),
            artists: tile.querySelector('p:nth-of-type(2)').innerText.replace('Artist(s): ', ''),
            album: tile.querySelector('p:nth-of-type(3)').innerText.replace('Album: ', ''),
            albumCover: tile.querySelector('img').src,
        };
    });

    const json = JSON.stringify(trackRecommendations, null, 2);
    const blob = new Blob([json], { type: 'application/json' });
    const url = URL.createObjectURL(blob);
    const a = document.createElement('a');
    a.href = url;
    a.download = 'track_recommendations.json';
    a.click();
    URL.revokeObjectURL(url);
}

// attach the search function to the button click event
document.getElementById('searchButton').addEventListener('click', handleSearchButtonClick);
document.getElementById('exportButton').addEventListener('click', exportJson);

