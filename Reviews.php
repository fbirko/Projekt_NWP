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
        <title>REVIEWS</title>
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
            <main>
            <div class="banner-image"></div>
            <h1>Reviews</h1>
            <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=dkpD_PBuAWo&list=OLAK5uy_m1EDXdgXNWy7O8O8kzJEK4pRCMybbqgIk">
                  <img src="slike/Pharoah-Sanders-Floating-Points.jpg" alt="floatring_points" width="600" height="400">
                </a>
                <h2>Floating Points-Promises</h2>
                <div class="desc">Promises is a tasteful, spellbinding, and beautiful intersection of jazz, classical, and electronic music.</div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=IC1-48XZ2rk&list=OLAK5uy_m-ojluHk-f6iNFlI5MKWaITwETUpyTgSU">
                  <img src="slike/By_the_Time_I_Get_to_Phoenix_cover.jpg" alt="Injury Reserve" width="600" height="400">
                </a>
                <h2>Injury Reserve</h2>
                <div class="desc">After a devastating loss. Injury Reserve pulled something of a masterpiece from a truly hellish year.</div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=1SkDLogU-O8&list=OLAK5uy_mMlGvmb6bLlM4Vy4zJrLD2xly51BHe9nk">
                  <img src="slike/Black_Country_New_Road-_For_the_First_Time_(Album_Cover).jpg" alt="Black_country_New_road" width="600" height="400">
                </a>
                <h2>BCNR-For the First Time</h2>
                <div class="desc">Rock debuts as daring as For the First Time are a rarity. A must listen for sure!</div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=-pPXy1SXjs8&list=OLAK5uy_kUnskQcRsXYKRx_gPeeYNoPAnMemYyE18">
                  <img src="slike/blackmidi_cavalcade.jpg" alt="black_midi" width="600" height="400">
                </a>
                <h2>Black Midi-Cavalcade</h2>
                
                <div class="desc">Cavalcade finds black midi remaining one of the most exciting acts in modern rock while going avant-prog.</div>
              </div>

              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=Nqybtz4BibQ">
                  <img src="slike/for those i love.jpg" alt="for_those_i_love" width="600" height="400">
                </a>
                <h2>For Those I Love-For Those I Love</h2>
                <div class="desc">Loss of his best friend, teenage memories and ravey sounds to celebrate love, light and togetherness</div>
              </div>

              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=XnvdS9-WURU">
                  <img src="slike/haram.jpeg" alt=armmand_hammer" width="600" height="400">
                </a>
                <h2>Armand Hammer-Haram</h2>
                <div class="desc">The Alchemist, ELUCID and billy woods drag postcolonial wounds onto the examination table.</div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=SwioBhCf2Kg&list=OLAK5uy_kLf1sXKBI0Fl2zairVTlMRrNB2hThKp-4">
                  <img src="slike/Richard-Dawson-Circle-Henki.jpeg" alt="henki" width="600" height="400">
                </a>
                <h2>Richar Dawson & Circle-Henki</h2>
                <div class="desc">The eccentric English songwriter and the prolific Finnish rock group collaborate for an album</div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=qfnEYePSo6w&list=OLAK5uy_mlMyOVSBjF7NNMPNSqdhV2YiF3A0mwSsY">
                  <img src="slike/SH253-cover.jpg" alt="Lingua_ignota" width="600" height="400">
                </a>
                <h2>Lingua Ignota-Sinner Get Ready</h2>
                <div class="desc">Latest is an intense and frightening religious inquiry, incorporating televangelist sermons.</div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=EXRLoV1I_UE">
                  <img src="slike/Jpegmafia-LP.jpg" alt="LP" width="600" height="400">
                </a>
                <h2>JPEGMAFIA-LP</h2>
                <div class="desc">Unbelievable production from Madlib and a very improved and consistent Freddie Gibbs. </div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=uwYg1hOGRQQ&list=OLAK5uy_kARhnFyRNF_JmRGgnsP27SGTq4hsiwyWs">
                  <img src="slike/Turnstile-Glow-On.jpg" alt="glow_on" width="600" height="400">
                </a>
                <h2>Turnstile-Glow on</h2>
                <div class="desc">The Baltimore band’s spectacular fourth record is all groove, riffs, and passion.</div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=aktRqdBmrf4&list=OLAK5uy_lzJXyds7tiw-cUS9Zg9wXRSiWpNJM6i7s">
                  <img src="slike/Tyler-the-Creator.jpg" alt="CMIYGL" width="600" height="400">
                </a>
                <h2>Tyler,The Creator-Call Me if You Get Lost</h2>
                <div class="desc">Wu-Tang and Baudelaire, together at last!</div>
              </div>


              <div class="gallery">
                <a target="_blank" href="https://www.youtube.com/watch?v=e_iQch-o7ZM&list=PLfKqpRMvmGbMPzB7-u8Y4uUjOzqtzuV-7">
                  <img src="slike/Freddie_Gibbs_Piñata.jpg" alt="black_midi" width="600" height="400">
                </a>
                <h2>Freddie Gibbs & Madlib-Piñata</h2>
                <div class="desc">Unbelievable production from Madlib and a very improved and consistent Freddie Gibbs. </div>
              </div>
              </main>
    </body>
</html>