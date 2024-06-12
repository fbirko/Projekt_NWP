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
		<title>News_Page_3</title>
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
        <h1>JPEGMAFIAs most ambitious LP</h1>
        <div class="gallery_news">
            <a href=https://slyvinyl.com/wp-content/uploads/2020/10/jpegmafia-lp-view-02.png target="_blank"><img src="slike/jpegmafia-lp-02.png"></a>
        <div class="desc_news">JPEGMAFIA-LP Vinyl</div>
        </div>
        <h2>Though just as charged and confrontational as any of his other projects, the rapper’s latest album is uninhibited and proud of it.</h2>
        <p>The chip on JPEGMAFIA’s shoulder has only grown bigger with time. His music—a blend of rap, noise, and punk filtered through the cultural vacuum of the internet—has always existed in the space between brash and sly, hollowing out the center of that Venn diagram with a jagged shovel</p>
        <p>Every project, from 2015’s Communist Slow Jams onward, sways from hazy synths to bludgeoning boom-bap to earnest covers of pre-Y2K ballads on a dime, mixing and matching the styles as fresh perspectives on a well-established formula</p>
        <p>His two breakout records—2018’s independent Veteran and his 2019 major-label debut All My Heroes Are Cornballs—mine from different ends of the noise-rap spectrum, but JPEG’s humor and world-weary thoughts on racism and music industry bullshit are the adapters through which he’s able to process any musical energy. His rage is palpable while being offset by a deep passion for craft and left-field pop culture reference.</p>
        <p>For starters, LP! has been released in two forms: the “Online” version—uploaded to streaming services like Spotify, Apple Music, etc.—and the “Offline” version available on YouTube and Bandcamp, which boasts a handful of extra songs, extended versions of existing ones, and a slightly tweaked tracklist. Even the project’s title—the most basic descriptor imaginable with an exclamation point at the end—feels like a middle finger or at least a metatextual rib poke.</p>
        <a href="https://www.rollingstone.com/music/music-features/black-midi-schlagenheim-interview-947251/">Source</a>
        <br>
        <a href="News.php">Back to the News Page</a>
    </main>
 
</html>