<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}else{
    header("Location: NotLoggedIn.html");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>	
		<title>News_Page_1</title>
		<link rel="stylesheet" href="style.css">
        <link rel="icon" href="slike/tab_img.png">
        <meta name="author" content="Filip Birko">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="description" content="Music news and reviews website">
        <meta name="keywords" content="Music, News, Reviews">
	</head>
    <body>
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        
        
    <?php endif; ?>
        <header>
            <nav>
                <ul>
                <li><a href="index.php" class="hover_line">HOME</a></li>
			  <li><a href="#About" class="hover_line">ABOUT </a></li> 
			  <li><a href="Contact_us.php" class="hover_line"> CONTACT US</a></li>
			  <li><a href="News.php" class="hover_line">NEWS</a></li>
			  <li><a href="Reviews.php" class="hover_line">REVIEWS</a></li>
			  <li><a href="login.php" class="hover_line">LOG-IN</a></li>
			  <li><a href="SignUp.php" class="hover_line">SIGN-UP</a></li>
              <li><a href="API.php" class="hover_line">Spotify API</a></li>
                  </ul>
            </nav>
            <div class="banner-image"></div>
        </header>
    </body>
    <main>
        <h1>Floating Points, Pharoah Sanders and The London Symphony Orchestra release a new exciting experimental project </h1>
        <div class="gallery_news">
            <a href=https://media.pitchfork.com/photos/6026d63aec376351a9b1c8b0/1:1/w_320/Pharoah-Sanders-Floating-Points.jpg target="_blank"><img src="slike/Pharoah-Sanders-Floating-Points.jpg"></a>
        <div class="desc_news">Floating Points, Pharoah Sanders and The London Symphony Orchestra Album cover</div>
        </div>
        <h2>The all-star collaboration between a producer, a saxophonist, and a symphony is a celestial event. But it’s Pharoah Sanders’ playing that holds it all together, a clear late-career masterpiece. </h2>
        <p>In a 2020 interview with The New Yorker, saxophonist Pharoah Sanders, who turned 80 last October, said he hadn’t been listening to records for a while. “I listen to things that maybe some guys don’t,” he said. “I listen to the waves of the water. Train coming down. Or I listen to an airplane taking off.”</p>
        <p>For most of Sanders’ career as an improvising musician, he was in a studio or on a stage with other musicians, and they listened and played together in real time. But he’s a listener as well as a player, able to respond to what he’s hearing and create beautiful art under different circumstances. His adaptability allowed him to work in a multitude of settings over the years, from harsh free playing through groove-heavy spiritual jazz and excursions into popular song.</p>
        <p>In the past year, Sanders worked with Sam Shepherd, the British producer and composer who records under the name Floating Points, on a sweeping, nine-movement piece called “Promises.” Shepherd composed the music, played various instruments, electronic and otherwise, and enlisted the London Symphony Orchestra to perform it. Sometimes the piece is so quiet you might check your volume setting to see if it’s still on, and other times, when the strings hit a crescendo, it’s earth-shaking</p>
        <p> In the middle of this tapestry is Sanders, his warm tone and fluid technique undiminished even at 80 years old, listening to his surroundings and finding brilliant patterns to stitch the work together and thus elevate</p>
        <div class="gallery_news">
            <a href=https://i.guim.co.uk/img/media/334411630f5b1207bc907325e5225ee088fb93f4/71_0_4590_2754/master/4590.jpg?width=620&quality=85&auto=format&fit=max&s=873d372aa9e09cc335928af5bb2b1d07 target="_blank"><img src="slike/sanders floating points.jpg"></a>
        <div class="desc_news">Floating points & Pharoh Sander</div>
        </div>
        <p>There are clear antecedents to this record. As far as strings and an improvising saxophone, there was Ornette Coleman’s 1972 Skies of America, also recorded with the London Symphony Orchestra—though his arrangements had a biting edge of atonality that would break the spell cast here. Alice Coltrane’s Lord of Lords from the same year has a similar spiritual underpinning, and her arrangement of “Going Home” on that record shares some feeling with this piece</p>
        <p>And the combination of squelchy jazz-informed electronics from a young DJ and acoustic improvisation from an elderly master brings to mind Kieran Hebden & Steve Reid’s 2007 record Tongues, and work by Flying Lotus, but those are beat-driven projects and Promises is about melody, harmony, and texture. There’s patience and focus to this piece, all powered by Sanders’ horn.</p>
        <p>Throughout its emotional 46 minutes, Promises stirs feelings that can be hard to name. The first sound we hear is one that courses through the entire piece—a brief, seven-note refrain played by what seems to be a harpsichord, sometimes accented by a bell-like tone that could be the celeste. </p>
        <p>The cluster of sounds begins in silence, and we can hear the creak of wood and some shifting objects in the room where it was recorded, and it repeats every nine seconds for almost the duration of the piece. It’s a small twinkly loop that brings to mind the feeling of awakening, as if something that was unclear is now understood, there to be rediscovered with each cycle. And that repeating fragment holds the composition together, and every sound exists in relation to it, even if we can’t quite sense how they fit together.</p>
        <p>When Sanders enters early on, his tone is clarion, melodic but harmonically free, hovering near that central cluster of notes without sounding bound to it. His opening solo, set against a quiet backdrop, is slow and searching, alternating between held notes that convey melancholy and short trills of melody that suggest hope. In “Movement 3,” when the strings enter, soft at first, then more shrill, Sanders shifts his playing to meet their register, and the piece gets spacier, even a little psychedelic. Something about that central loop, the strings, Sanders’ lines, and Shepherd’s subtle synthesizer drones makes me think about seeing a planet spinning on its axis from somewhere in orbit. And then as “Movement 3” bleeds into “Movement 4,” Sanders’ sets his horn aside and begins to vocalize wordlessly, offering small flutters of syllables closely into the microphone.</p>
        <p>The effect of his naked voice is disarmingly intimate and moving. Amid this carefully composed and engineered piece, and following virtuosic soloing from one of the living masters of his instrument, we hear the simple sound of a human utterance—the most basic unit of interaction into the realm of a dream. Through “Movement 5” Sanders plays with more intensity, a cello solo follows in “Movement 6,” as the symphonic elements gather force. In “Movement 8” Shepherd folds in bits of trilling Alice Coltrane-like organ runs, and then in “Movement 9,” following a violin solo, the orchestra briefly rattles and shakes in a sharp but brief climax, and then Promises is gone, returning to silence.</p>
        <p>The arc of Promises needs time and space to unfold, and the length and continuous nature of the piece is central to its impact. If it were 20 minutes long—or 60—it wouldn’t have the same force. Nothing is rushed, but nothing is lingered over for too long, either. And as gorgeous as Shepherd’s music and arrangements are, I keep circling back to Sanders, his horn now quieter but just as emotionally powerful as when he wielded it alongside John Coltrane at age 25, when he was ripping terrifying blasts of sound that could peel paint. He’s always been quiet as far as the press goes, doing few interviews and letting his playing do the talking. On this piece, a clear late-career masterpiece, it’s saying plenty.</p>
        <br>
        <a href="https://pitchfork.com/reviews/albums/floating-points-pharoah-sanders-the-promises/">Source</a>
        <br>
        <a href="News.php">Back to the News Page</a>
    </main>
</html>