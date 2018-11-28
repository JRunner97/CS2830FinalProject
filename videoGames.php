<?php

    if(!session_start()){
        header("Location: error.php");
        exit;
    }

	$currentUser = empty($_SESSION['currentUser']) ? false : $_SESSION['currentUser'];
	if (!$currentUser) {
		header("Location: loginHandler.php");
		exit;
	}
?>
<!DOCTYPE  html>
<html lang="en">

    <head>
    
        <title>Video Games</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Styles/project.css">
        <link rel="stylesheet" type="text/css" href="Styles/myStyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> 
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="Scripts/myScript.js"></script>
    </head>

    <body id="homeBody">
        <nav>
            <div class="navbar">
                <div class="logoCircle">
                    <img src="https://static.thenounproject.com/png/22529-200.png" alt="lemur logo">
                </div>

                <a href="loginHandler.php"><h2 id="header">Zen Culture</h2></a>
                <button class="fas fa-bars slide-toggle"></button>
            </div>

            <hr>

            <div class="sidebar">
                <div class="sidebar-content">
                    <i class="fas fa-times exit-sidebar"></i>
                    <a href="homePage.php"><h3>Home</h3></a>
                    <hr>
                    <a href="aboutUs.php"><h3>About Us</h3></a>
                    <hr>
                    <a href="logMeOut.php"><h3>Logout</h3></a>
                </div>
            </div>

            <div class="sidebarOverlay"></div>
        </nav>
            
        <div id="aboutUsContent">
            
            <div class="banner"></div>
            <br>
            <div class="spacing"></div>
            <div id="authorBox">
                <div class="crop-author">
                    <img src="https://scontent-ort2-2.xx.fbcdn.net/v/t31.0-8/23550248_756628921204155_8195512332060398294_o.jpg?_nc_cat=100&_nc_ht=scontent-ort2-2.xx&oh=27055813c4745e36fda11ad9674df479&oe=5CB26743" alt="Author Picture">
                </div>
                <div class="about-author">
                    <br>
                    <p><strong>By:</strong> Joshua Thompson</p>
                    <br>
                    <p><strong>Published:</strong> 11/18/2018</p>
                    <br>
                    <p><strong>Email:</strong> jltmh3@mail.missouri.edu</p>
                </div>
                <div class="crop-article-picture">
                    <img src="https://pbs.twimg.com/profile_images/983803209947873281/Mlll9kHm.jpg" alt="article picture">
                </div>
            </div>
            <div class="article-content">
                <h1>Video Games</h1>
                <p>I love video games. Before, if I was asked why I like video games, I would probably say because it's fun to shoot stuff. However, now thats not why. I like puzzle games, adventure games, stories and yes still first person shooters. Video games let me dive into a new world and experience child like curiosity over and over again. Roaming around in Zelda Breath of the Wild not knowing where I'm going was all the fun when I would stumble upon new things I would have never found otherwise. What's more it gives me a chance to stay in touch with friends who go to school in other states. We can share a common bond this way and talk about what's going on our lives.</p>
            </div>
        </div>
        
        
    </body>
</html>
