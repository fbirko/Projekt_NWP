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
        <title>CONTACT US</title>
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
                <div class="banner-image"></div>
            </nav>
    </body>
    <h1>Contact Us</h1>
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Ul.%20Poljanice%20IV&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://www.whatismyip-address.com"></a>
                    
</html>


