<!DOCTYPE  html>
<html lang="en">

    <head>
    
        <title>CS2830 Project | Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Styles/project.css">
        <link rel="stylesheet" type="text/css" href="Styles/myStyle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet"> 
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
<!--        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        
        <script src="Scripts/myScript.js"></script>
    </head>

    <body id="loginBody">
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
            
        <?php
            if ($error) {
                print "<div class='alert alert-danger'>
                  <strong>Warning! </strong>$error
                </div>";
            }
        ?>
        <div id="mainContent">
            <div id="loader"></div>
            <div id="loginBox">
                <img src="https://bloximages.newyork1.vip.townnews.com/columbiamissourian.com/content/tncms/assets/v3/editorial/c/3d/c3d57598-769b-11e5-b280-abe871bfdcbe/56254b643855b.image.jpg" alt="login background image">
        
                <div class="loginOverlay">
                    <div class="overlayContent">
                  
                        <div class="tab">
                          <button class="tablinks active" onclick="selectTab(event, 'login')">Login</button>
                          <button id="signUpTab" class="tablinks" onclick="selectTab(event, 'signup')">Sign Up</button>
                        </div>
                        
                        <div id="login" class="tabHiddenContent">
                            <form id="loginForm" action="loginHandler.php" method="post">

                                <input type="hidden" name="action" value="loginMeIn">
                                <br>
                                <label id="usernameLabel" for="username">Username:</label>
                                <br>
                                <input type="text" id="username" name="username" placeholder="Username" autofocus value="<?php print $username; ?>">
                                <br>
                                <br>
                                <label id="passwordLabel" for="password">Password:</label>
                                <br>
                                <input type="password" id="password" name="password" placeholder="Password" >
                                <br>
                                <input id="loginButton" type="submit" form="loginForm" onclick="showLoader()" class="button" value="Log In">
                            </form>
                        </div>

                        <div id="signup" class="tabHiddenContent">
                          <form id="signUpForm" action="loginHandler.php" method="post">

                                <input type="hidden" name="action" value="signMeUp">
                              
                                <label id="nameLabel" for="name">Name:</label>
                                <br>
                                <input type="text" id="first_name" name="first_name" placeholder="First">
                                <input type="text" id="last_name" name="last_name" placeholder="Last">
                                <br>
                                <br>
                                <label id="emailLabel" for="name">Email:</label>
                            
                                <label id="usernameLabel" for="username">Username:</label>
                                
                                <br>
                                <input type="text" id="email" name="email" placeholder="Email">
                                
                                <input type="text" id="username" name="username" placeholder="Username" autofocus value="<?php print $username; ?>">
                                <br>
                                <br>
                                <label id="passwordLabel" for="password">Password:</label>
                                <br>
                                <input type="password" id="password" name="password" placeholder="Password">
                                <br>
                                <input id="loginButton" type="submit" form="signUpForm" class="button" value="Log In">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
