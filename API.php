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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Web App</title>
    <link rel="stylesheet" href="api.css">
</head>
<body>
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
        <h1>Get recommendations and data about the song</h1>
        <h2>Try it out:</h2>
        <a>Jazz: https://open.spotify.com/track/3rZrK0m6FsVwNBS0SFpivX?si=c6fd7faf3c9f4799</a>
        <br>
        <a>Hip-Hop: https://open.spotify.com/track/3RCbCn5Y1OQpk2FPzBkhJV?si=5afa59df0eb24139</a>
        <br>
        <a>Rock: https://open.spotify.com/track/37Tmv4NnfQeb0ZgUC4fOJj?si=44587e17abb64df2</a>
    </header>
    <main>
        <div class="search-container">
            <input type="text" id="trackLink" placeholder="Enter Spotify track link or name">
            <button id="searchButton">Search</button>
            <button id="exportButton">Export JSON</button>
        </div>
        <div id="resultContainer"></div>
        <div id="recommendationsContainer"></div>
    </main>
    <script src="app.js"></script>

</body>
</html>
