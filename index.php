<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>	
		<title>HOME</title>
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
			  <li><a href="SignUp.html" class="hover_line">SIGN-UP</a></li>
			  <li><a href="API.php" class="hover_line">Spotify API</a></li>
			</ul>
		</nav>
		<div class="hero-image"></div>
	</header>
    <main>
		<a name="About"></a>
        <h1>ABOUT US</h1>
		<p>ONE music is a music news outlet based in Croatia.</p>
		<p>We are a leading independent publisher featuring news, reviews, interviews</p>
		<p>ONE music news provides comprehensive music info including reviews and biographies</p>
		<p>While our main drive is to bring you all the music from everyone's favourite artist,</p>
		<p>We still take pride in discovering new artist and giving them the opportunity to have their music heard.</p>
		<p>We’re dedicated to sharing the music that we love and we take much pride in our reputation for showcasing the best new music from around the world every day.</p>
		<p>We’ve built a strong reputation for discovering and supporting the best new music by established and upcoming artists from across the globe.</p>
		<p>While our tastes can be quite diverse, the hight quality of music can always be guaranteed.</p>
		<p>On the News page you can find all the latest news </p>
		<p>On the Reviews page you can find all of our reviews, pressing the album cover will take you to the album.</p>
		<p>On the Contact Us page you can find our location, also you can sign up for our news letter.</p>
		<p>Underneath you can usually find our Featured video.</p>
		<h2>Featured Video</h2>
		<h3>pak-Tsalal</h3>
		<video width="50%" controls poster="slike/pak-tsalal.jpg" ><source src="video/pak Tsalal.mp4" type="video/mp4">
	</main>
	<nav>
		<ul>
			<li><a href="#top" class="hover_line">BACK TO TOP</a></li>
		</ul>
	</nav>
	<footer>
		<p>Copyright &copy; 2021 Filip Birko.</p><a href=https://github.com/fbirko/Projekt_WEB_APP><img src=slike/GitHub_img.png></a>
	</footer>
</body>
</html>
