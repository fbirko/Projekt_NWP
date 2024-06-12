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
		<title>News_Page_5</title>
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
        <h1>Tyler, The Creator's take on WU Tang and Charles Baudelaire</h1>
        <div class="gallery_news">
            <a href=https://media.pitchfork.com/photos/60cb72ddadc2201193add729/1:1/w_320/Tyler-the-Creator.jpg target="_blank"><img src="slike/Tyler-the-Creator.jpg"></a>
        <div class="desc_news">Call Me If You Get Lost Album cover</div>
        </div>
        <h2>With DJ Drama in tow, Tyler thrives in the realm of the rap mixtape, which allows him great freedom to explore every facet of his talent as a producer, writer, and vocalist.</h2>
        <p>In the 2000s, mixtapes became the most effective and popular medium for aspiring rappers to build fanbases, seduce critics, and serve as commercial proof-of-concept to major labels. Even established rappers used the format to work out new ideas or to circumvent those labels entirely. As file sharing turned what was once a regional enterprise into a global one, rappers who would have previously given a song here and there to the DJs who issued compilation-style mixtapes began headlining their own. </p>
        <p>And so instead of cutting a hundred demos that might never be heard, or rapping a capella to starchy executives in boardrooms, many artists who broke during the W. Bush years did so by jacking industry beats and rapping underneath those DJs’ excited yelps, their formative work rewound and doubled back until it settled in your brain just so.</p>
        <p>When digital streaming platforms made it easy to profit off of online-only releases, provided the artist or label owns the rights to what’s uploaded, “mixtape” became a nominal term used cynically to signal which rap records were meant to be taken more seriously than others. (Think of how many times you’ve seen advertising for an artist’s “debut album” only to think, “Don’t they have three albums already?”) Call Me If You Get Lost—which is either Tyler, the Creator’s sixth or seventh album, depending on whether or not you count 2009’s Bastard—argues for the mixtape not as a tidy bit of careerist maneuvering, but as an aesthetic tradition. It’s an inspired choice, nostalgic but irreverent, and suited perfectly to his strengths: It grants him the freedom to play with tone, to write personally or use his gravelly voice as texture, to treat the harshest raps and the most delicate hooks as mad experiments gone wrong.</p>
        <p>Call Me is hosted by DJ Drama, the animated Philly native whose Gangsta Grillz series includes some of the most essential rap records of the century so far. There are times when the album evokes the grittiest of those tapes—its single reimagines a Gravediggaz song—but it breaks up the heavier cuts with shards of bright pop. (At times Call Me recalls In My Mind: The Prequel, the 2006 Gangsta Grillz tape by Tyler’s hero, Pharrell.) Drama is at his comedic best, goading on verses or underlining Tyler’s monologues about jet-setting (“A young lady just fed me French vanilla ice cream!”). He’s irresistible even when he’s fucking up the album’s title, as he does on the excellent “Hot Wind Blows,” which reunites him with Lil Wayne.</p>
        <a href="https://pitchfork.com/reviews/albums/tyler-the-creator-call-me-if-you-get-lost/">Source</a>
        <br>
        <a href="News.php">Back to the News Page</a>
    </main>
   
</html>