<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lofi Music</title>
    <link rel="icon" href="Images/logo.png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <img src="Images/logo.png" class="logo">

        <nav class="navbar">
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="#">  Welcome, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>!</a>
                    <a href="#jump">Listen Now</a>
                    <a href="logout.php" class="sbtn">Logout</a>
                <?php else: ?>
                    <a href="#jump">Listen Now</a>
                    <a href="signup.php" class="sbtn">Sign Up</a>
                    <a href="login.php" class="sbtn">Login</a>
                <?php endif; ?>
        </nav>
    </header>
    <section class="parallax">
        <img src="Images/Background.jpg" id="Background">
        <h2 id="text" class="logotext">Lofi Music</h2>
        <img src="Images/Cat.png" id="Cat">
    </section>
    
    <section class="player">
        <h1>   </h1>
        <br><br><br><br><br>
        <video src="Images/player.mp4" id="playerimage" autoplay muted loop></video>
        <h1>Minimalist Interface</h1>
        <p>Lofi Music Provides You Calm And Minimalist Interface For You To Relax And Study Calmly.</p>
        <br><br>
        <ul>
            <li>Beautiful UI</li>
            <li>Calm Music For Everyone</li>
            <li>Play Pause Music Anytime</li>
            <li>Multiple Customization</li>
        </ul>
        <p id="jump"> </p>
        <br><br><br><br>
        <h1 id="quote">"Music Is A pillow <br>For The Mind</h1>
        <br><br><br><br><br>
        <h2 style="color: azure;"><center>So Take A Listen,</center></h2>
        <br>
        <div class="button">
            <a href="Player.html">
                <button class="btn">Listen Now</button>
            </a>
        </div>
    </section>
</section>
<br><br><br><br><br><br><br><br><br><br>
<section >
    <div id="imagetrack">
        <img class="image" src="https://miro.medium.com/v2/resize:fit:1400/1*NkL4lcmr6MArb8XFFJDBUg.gif">
        <img class="image" src="https://miro.medium.com/v2/resize:fit:1280/0*YyL79g0pgvpMnzta">
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div ><p>  jkhhlisdculsd </p></div>
</section>
    <script src="script.js"></script>
</body>
</html>
