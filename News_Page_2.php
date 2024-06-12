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
		<title>News_Page_2</title>
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
        <h1>Black Midi: Meet England’s Hot New Noise-Rock Weirdos</h1>
        <div class="gallery_news">
            <a href=https://novosti.hr/wp-content/uploads/2021/03/black-midi-Cvalcade-front1111.jpg target="_blank"><img src="slike/blackmidi_cavalcade.jpg"></a>
        <div class="desc_news">Black Midi Cavalcade Album cover</div>
        </div>
        <h2>The phrases “avant-garde improvisational noise rock” and “hot new buzz band” don’t often show up next to each other in the same sentence. But they’re hard to avoid when discussing London’s</h2>
        <div class="gallery_news">
            <a href=https://static.stereogum.com/uploads/2019/03/black-midi-again-1553271389.jpeg target="_blank"><img src="slike/black-midi-again-1553271389.jpeg"></a>
        <div class="desc_news">Black Midi</div>
        </div>
        <p>After an impromptu jam during a lunch break, the future members of Black Midi started rehearsing together, including weekly performances as part of their coursework, where they’d impress their somewhat bemused classmates with 20-minute improv escapades. “It did feel very easy when we first started playing together,” says Simpson. “The first few times I remember feeling, ‘Wow, it’s like we’ve been playing for ages together.’ It felt like we all just slotted in, like it was meant to be.”</p>
        <p>Since forming in 2017, Black Midi has been slathered in the kind of hype that seems a little excessive even for England. Before they’d released any music, the band was playing packed clubs and drawing rapturous festival crowds purely on word-of-mouth enthusiasm</p>
        <p>If there was any pressure to flatten out their idiosyncrasies for Cavalcade, they clearly rejected it. The album is a good deal more ambitious and more difficult than its predecessor, stretching even further in almost every direction that Schlagenheim staked out. The chord changes are more elaborate, the rhythms more twisted, the pretty parts prettier, the heavy parts heavier. Schlagenheim aspired toward jazz fusion and 20th-century classical; Cavalcade has passages that sound like Mahavishnu Orchestra and Olivier Messiaen. Schlagenheim had its fair share of dopey-awesome metallic grooves and guitar parts; Cavalcade comes thrillingly close, a handful of times, to Primus or System of a Down. Greep, who handles vocals on six of the eight songs, has upped his flair for the theatrical, abetted by new contributors on sax, violin, and keyboards. Listening to Schlagenheim, it was easy to imagine black midi kicking out the jams in a basement somewhere. Now, the imagined setting is more like a Hieronymous Bosch painting, or a three-ring circus. There is a vague but persistent feeling that someone involved might be wearing a monocle.</p>
        <p>“John L,” the album’s first song, is also its most broadly representative. The central theme creaks and lurches like a see-saw in need of WD-40 and Greep slurs out a portrait of a cultish political leader at the end of his rope. When the singer takes on the voice of John L himself, offering his followers a blend of nationalist fear and capitalist wish fulfillment, a grotesque vocal effect enters the mix to underscore the message’s dark familiarity: “A man is his country, your country is you/All bad is forewarned, all good will come true.” When there’s simply too much going on, the band creates powerful tension by paring things away: deconstructing their own groove in the song’s electrifying middle section, or plunging into cavernous silence between outbursts of drums and violin.</p>
        <p>In building so elaborately atop the black midi framework, Cavalcade loses a bit of Schlagenheim’s spartan urgency; there’s nothing like “Near DT, MI,” the Flint water crisis cri de cœur that provided the debut with its most searing two-minute stretch. But the band’s willingness to indulge every impulse also leads them to wild new territory. “Slow” and “Diamond Stuff,” the two songs fronted by bassist Cameron Picton (who also led “Near DT, MI”) are among the best in the black midi catalog. The former’s manic prog-jazz pounding imagines a surprisingly fruitful middle ground between Swans and Steely Dan. The latter is eerie and spacious, transfixing without rising above a whisper.</p>
        <p>There’s an aesthetic developing among jazz-schooled and internet-fried musicians like Louis Cole or DOMi and JD Beck, propagated on YouTube and social media more so than on proper albums, which has brought youthful new verve to wonky old virtuosity by acknowledging that there’s something a little funny about being able to play so ridiculously well. Whether intentionally or not, black midi have always had a bit of this quality—something like a joyous Are you fucking kidding me? was an appropriate reaction to those early live videos—and they bring it closer to the surface on Cavalcade. It’s there in that queasy-beautiful final cadence, and in the wink of the chord progression that underpins the verses of “Ascending Forth,” the closing song, which ascends by a fourth whenever Greep hits the titular phrase. It’s there in “Slow” and “Hogwash and Balderdash,” both of which feature variations on the same musical gag: in the middle of an intensely technical passage, the band suddenly drops out, leaving a single instrument to jitter nakedly for one measure or less before everyone barrels back in. More than any particular rock artist, it reminds me of Carl Stalling, the brilliant house composer for Looney Tunes.</p>
        <a href="https://www.rollingstone.com/music/music-features/black-midi-schlagenheim-interview-947251/">Source</a>
        <br>
        <a href="News.php">Back to the News Page</a>
        
    </main>
</html>