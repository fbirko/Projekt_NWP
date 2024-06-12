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
		<title>News_Page_4</title>
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
        <h1>Lingua Ignota-Sinner Get Ready</h1>
        <div class="gallery_news">
            <a href=https://media.pitchfork.com/photos/60c960a7917e6c9bb3efba53/1:1/w_320/SH253-cover.jpg target="_blank"><img src="slike/SH253-cover.jpg"></a>
        <div class="desc_news">SInner Get Ready Album cover</div>
        </div>
        <h2>Kristin Hayter’s latest is an intense and frightening religious inquiry, incorporating traditional Appalachian instruments and samples from televangelist sermons.</h2>
        <p>For her latest album as Lingua Ignota, Kristin Hayter burrowed deep into the landscape of rural Pennsylvania. Though the exact location of its genesis is not clear, Sinner Get Ready is crafted from Appalachian folk instruments and mired in the region’s traditional religious fervor. </p>
        <p>Interspersed with clips from televangelist sermons, this music examines the duality of blind devotion. Like so much of Hayter’s work, the record is also a text of discomfort; it was created during lockdown, following months of excruciating pain due to a spinal surgery. Even the instruments she worked with presented a unique challenge: The classically trained musician taught herself to play banjo and cello, stoking their sounds to ignite a torrid mythology.</p>
        <p>On her previous Lingua Ignota album, 2019’s Caligula, Hayter invoked Satan himself, commanding him to “fortify” her in a quest for retribution. It was an expulsion of personal trauma—a blistering tribute to oppressed women. For that album, Hayter enlisted members of the Body, Uniform, and Full of Hell, subjecting her operatic melodies to corrosive distortion and electronic manipulation. On Sinner Get Ready, Hayter confronts the inverse of Caligula, both formally and thematically. She forgoes digital processing for simpler tools: menacing organ, an animal-skin drum, penny whistle. Hayter either subverts these instruments or leans into their ecclesiastical implications. The result, as those who’ve encountered the full-tilt of religious fanaticism know, are just as frightening.</p>
        <a href="https://pitchfork.com/reviews/albums/lingua-ignota-sinner-get-ready/">Source</a>
        <br>
        <a href="News.php">Back to the News Page</a>
    </main>
  
</html>