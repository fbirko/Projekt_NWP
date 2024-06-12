<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
	<link rel="icon" href="slike/tab_img.png">
    <meta name="author" content="Filip Birko">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="description" content="Music news and reviews website">
    <meta name="keywords" content="Music, News, Reviews">
</head>
<body>
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
    <h1>Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button class="button-28" role="button">Log in</button>
    </form>
    
    
</body>
</html>