<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

    if(!session_start()){
        header("Location: /CS2830Project/error.php");
        exit;
    }

	$currentUser = empty($_SESSION['currentUser']) ? false : $_SESSION['currentUser'];
	if (!$currentUser) {
		header("Location: /CS2830Project/loginHandler.php");
		exit;
	}
?>
<!DOCTYPE  html>
<html lang="en">

    <head>
    
        <title>CS2830 Project | Home</title>
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
        
        <div id="pageContent">
            <div class="carousel-container">
                <div id="slide1" class="slide crop-slide active">
                    <img src="http://ec2-18-221-150-95.us-east-2.compute.amazonaws.com/Photos/Nirca.jpg" alt="main Picture">
                    <a href="https://www.google.com/">
                        <button class="slideLink">Read More</button>
                    </a>
                    <div class="slideOverlay"></div>
                </div>
                <div id="slide2" class="slide crop-slide">
                    <img src="http://ec2-18-221-150-95.us-east-2.compute.amazonaws.com/Photos/RootsnBlues.jpg" alt="main Picture">
                    <a href="https://www.google.com/">
                        <button class="slideLink">Read More</button>
                    </a>
                    <div class="slideOverlay"></div>
                </div>
                <div id="slide3" class="slide crop-slide">
                    <img src="http://ec2-18-221-150-95.us-east-2.compute.amazonaws.com/Photos/ChicagoMuseum.jpg" alt="main Picture">
                    <a href="springBreak2018.php">
                        <button class="slideLink">Read More</button>
                    </a>
                    <div class="slideOverlay"></div>
                </div>

                <div class="background-image">
                    <img src="https://images.unsplash.com/photo-1485288734756-0b31a0a31d95?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2b2f369f46f24cbcc6c9bf8dde83b59c&w=1000&q=80" alt="background image">
                </div>

                <span class="nextSlide" onclick="nextSlide()">
                    <i class="fas fa-chevron-right"></i>
                </span>

                <span class="previousSlide" onclick="previousSlide()">
                    <i class="fas fa-chevron-left"></i>
                </span>
            </div>
            
            <div class="banner"></div>
            
            
            
            <div id="features-container">
                
                <h1 id="featureHeading">Featured Trends</h1>
                
                <hr id="featureHR">
                <div id="buttonGroup">
                    <input type="button" value="1 Features" onclick="getFeatures(1)">
                    <input type="button" value="2 Features" onclick="getFeatures(2)">
                    <input type="button" value="3 Features" onclick="getFeatures(3)">
                </div>
                <div id="featureBox">
                    
                </div>
            </div>
            
            <div id="partition">
                <svg id="shape" height="150" width="1200">
                    <polygon points="0,150 1200,150 1200,0" />
                  Sorry, your browser does not support inline SVG.
                </svg>
            </div>
            <div id="additionalInformation">
                <div id="images-container">
                    <svg id="trianglePic1" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="100,0 0,100 100,100"/>
                      Sorry, your browser does not support inline SVG.
                    </svg>
                    <figure id="additionalInfoPic1" class="crop-author-picture">
                        <img src="https://scontent-ort2-2.xx.fbcdn.net/v/t31.0-8/22529011_745578912309156_5610521594128163330_o.jpg?_nc_cat=105&_nc_ht=scontent-ort2-2.xx&oh=3116c4d2420ff6b9b7bd4f64d0fe7a00&oe=5C82FA24" alt="personal photo">
                    </figure>
                    <svg id="trianglePic2" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="100,0 0,100 100,100"/>
                      Sorry, your browser does not support inline SVG.
                    </svg>
                    <figure id="additionalInfoPic2" class="crop-author-picture">
                        <img src="https://scontent-ort2-2.xx.fbcdn.net/v/t1.0-9/29597324_826287404238306_7189822240260414734_n.jpg?_nc_cat=100&_nc_ht=scontent-ort2-2.xx&oh=6bd2c3666d0d2f3d983bd705c0c96cea&oe=5C63D873" alt="personal photo">
                    </figure>
                    <svg id="trianglePic3" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <polygon points="100,0 0,100 100,100"/>
                      Sorry, your browser does not support inline SVG.
                    </svg>
                    <figure id="additionalInfoPic3" class="crop-author-picture">
                        <img src="https://scontent-ort2-2.xx.fbcdn.net/v/t31.0-8/18216835_666308516902863_2536487000157506390_o.jpg?_nc_cat=103&_nc_ht=scontent-ort2-2.xx&oh=9396ea4d20d7d1380a8dfde904caf66c&oe=5C836C68" alt="personal photo">
                    </figure>
                </div>
                <div id="additionalInfoTextContainer">
                    <div id="topLeftCorner"></div>
                    
                    <div id="quoteContainer">
                        <p id="featuredQuote">The important thing is not to stop questioning. Curiosity has its own reason for existing.<br><br>-- Albert Einstein</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal help from https://getbootstrap.com/docs/4.0/components/modal/ -->
        <div class="modal fade" id="overwatchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="videoContainer">
                    <iframe class="youtubeVideo" src="https://www.youtube.com/embed/1JtshNHkH-E"></iframe>
                  </div>
              </div>
              <div class="modal-footer">
                  <a href="videoGames.php">
                    <button type="button" class="btn btn-success">Read More</button>
                  </a>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal help from https://getbootstrap.com/docs/4.0/components/modal/-->
        <div class="modal fade" id="pianoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="videoContainer">
                     <iframe class="youtubeVideo" src="https://www.youtube.com/embed/DjMkfARvGE8"></iframe> 
                  </div>
              </div>
              <div class="modal-footer">
                  <a href="music.php">
                    <button type="button" class="btn btn-success">Read More</button>
                  </a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal help from https://getbootstrap.com/docs/4.0/components/modal/-->
        <div class="modal fade" id="runningModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="videoContainer">
                    <iframe class="youtubeVideo" src="https://www.youtube.com/embed/zfBFu5g1p5g"></iframe>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </body>
</html>




<!--
Persistent connections

$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass, array(
    PDO::ATTR_PERSISTENT => true
));


Closing a connection

$dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
// use the connection here
$sth = $dbh->query('SELECT * FROM foo');

// and now we're done; close it
$sth = null;
$dbh = null;



require method 


-->
