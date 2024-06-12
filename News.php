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
        <title>NEWS</title>
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
            <div class="banner-image"></div>
        </header>
    <main>
        <h1>NEWS</h1>
        <h2>Floating Points, Pharoah Sanders and The London Symphony Orchestra release a new exciting experimental project </h2>
        <div class="image">
            <a href=https://media.pitchfork.com/photos/6026d63aec376351a9b1c8b0/1:1/w_320/Pharoah-Sanders-Floating-Points.jpg target="_blank"><img src="slike/Pharoah-Sanders-Floating-Points.jpg" style="height: 250px; width: 250px; float: left; "></a>
            <p>The all-star collaboration between a producer, a saxophonist, and a symphony is a celestial event. But it’s Pharoah Sanders’ playing that holds it all together, a clear late-career masterpiece. </p>
            <a href="News_Page_1.php">Read More</a>
            <div class="time">
              <p><time datetime="2021-12-14">14 December 2021</time></p>
            </div>
            </div class="container">
            </div>
        </div>

        <h2>Black Midi: Meet England’s Hot New Noise-Rock Weirdos</h2>
        <div class="image">
            <a href=https://www.rollingstone.com/wp-content/uploads/2020/02/black-midi-AYNTK.jpg?resize=1800,1200&w=1200 target="_blank"><img src="slike/black-midi-AYNTK.jpg"style="height: 250px; width: 250px; float: left;"></a>
            <p>The UK band stakes out even more ground on their glorious second album. The chord changes are more elaborate, the rhythms more twisted, the pretty parts prettier, the heavy parts heavier.</p>
            <a href="News_Page_2.php">Read More</a>
            <div class="time">
              <p><time datetime="2021-11-6">6 November 2021</time></p>
            </div>
          </div class="container">
        </div>
        </div>
           
          <h2>JPEGMAFIAs most ambitious LP </h2>
          <div class="image">
              <a href=https://media.pitchfork.com/photos/6172b22d2264f526b6262816/1:1/w_320/Jpegmafia-LP.jpg target="_blank"><img src="slike/Jpegmafia-LP.jpg" style="height: 250px; width: 250px; float: left; "></a>
              <p>Though just as charged and confrontational as any of his other projects, the rapper’s latest album is uninhibited and proud of it.</p>
              <a href="News_Page_3.php">Read More</a>
              <div class="time">
                <p><time datetime="2021-10-2">1 November 2021</time></p>
              </div>
            </div class="container">
          </div>
          </div>

            <h2>Lingua Ignota-Sinner Get Ready</h2>
          <div class="image">
              <a href=https://media.pitchfork.com/photos/60c960a7917e6c9bb3efba53/1:1/w_320/SH253-cover.jpg target="_blank"><img src="slike/SH253-cover.jpg" style="height: 250px; width: 250px; float: left;"></a>
              <p>Kristin Hayter’s latest is an intense and frightening religious inquiry, incorporating traditional Appalachian instruments and samples from televangelist sermons.</p>
              <a href="News_Page_4.php">Read More</a>
              <div class="time">
                <p><time datetime="2021-9-22">22 September 2021</time></p>
              </div>
            </div class="container">
          </div>
            
          </div>

            <h2>Tyler, The Creator's take on WU Tang and Charles Baudelaire</h2>
            <div class="image">
                <a href=https://media.pitchfork.com/photos/60cb72ddadc2201193add729/1:1/w_320/Tyler-the-Creator.jpg target="_blank"><img src="slike/Tyler-the-Creator.jpg" style="height: 250px; width: 250px; float: left; "></a>
                <p>With DJ Drama in tow, Tyler thrives in the realm of the rap mixtape, which allows him great freedom to explore every facet of his talent as a producer, writer, and vocalist. </p>
                <a href="News_Page_5.php">Read More</a>
                <div class="time">
                  <p><time datetime="2021-8-7">7 August 2021</time></p>
                </div>
              </div class="container">
            </div>
            </div>
          </main>
    </body>
</html>