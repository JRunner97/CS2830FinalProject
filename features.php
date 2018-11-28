<?php	
	
    if(!session_start()){
        header("Location: error.php");
        exit;
    }
    // see if user is already logged in
    $loggedin = empty($_SESSION['currentUser']) ? '' : $_SESSION['currentUser'];
    
    // If the user is not logged in, redirect them
    if (!$loggedin) {
        header("Location: homePage.php");
        exit;
    }
    
    $featureNum = empty($_GET['featuresNum']) ? '3' : $_GET['featuresNum'];

    switch($featureNum) {
        case '3':
            $info = '
                    <div class="feature crop-feature" data-toggle="modal" data-target="#overwatchModal">
                        <img src="https://pbs.twimg.com/profile_images/983803209947873281/Mlll9kHm.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Overwatch</div>
                        </div> 
                    </div>
                    <div class="feature crop-feature" data-toggle="modal" data-target="#pianoModal">
                        <img src="http://www.norwoodlibrary.org/wp-content/uploads/2016/05/piano-03.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Piano</div>
                        </div> 
                    </div>
                    <div class="feature crop-feature" data-toggle="modal" data-target="#runningModal">
                        <img src="https://bloximages.chicago2.vip.townnews.com/palestineherald.com/content/tncms/assets/v3/editorial/a/30/a3084df0-37ae-11e8-be24-1f95a073f9a4/5ac4368d3c994.image.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Running</div>
                        </div> 
                    </div>';
            break;
        case '2':
            $info = '
                    <div class="feature crop-feature" data-toggle="modal" data-target="#overwatchModal">
                        <img src="https://pbs.twimg.com/profile_images/983803209947873281/Mlll9kHm.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Overwatch</div>
                        </div> 
                    </div>
                    <div class="feature crop-feature" data-toggle="modal" data-target="#pianoModal">
                        <img src="http://www.norwoodlibrary.org/wp-content/uploads/2016/05/piano-03.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Piano</div>
                        </div> 
                    </div>';
            break;
        case '1':
            $info = '
                    <div class="feature crop-feature" data-toggle="modal" data-target="#overwatchModal">
                        <img src="https://pbs.twimg.com/profile_images/983803209947873281/Mlll9kHm.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Overwatch</div>
                        </div> 
                    </div>';
            break;
        default: 
            $info = '
                    <div class="feature crop-feature" data-toggle="modal" data-target="#overwatchModal">
                        <img src="https://pbs.twimg.com/profile_images/983803209947873281/Mlll9kHm.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Overwatch</div>
                        </div> 
                    </div>
                    <div class="feature crop-feature" data-toggle="modal" data-target="#pianoModal">
                        <img src="http://www.norwoodlibrary.org/wp-content/uploads/2016/05/piano-03.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Piano</div>
                        </div> 
                    </div>
                    <div class="feature crop-feature" data-toggle="modal" data-target="#runningModal">
                        <img src="https://bloximages.chicago2.vip.townnews.com/palestineherald.com/content/tncms/assets/v3/editorial/a/30/a3084df0-37ae-11e8-be24-1f95a073f9a4/5ac4368d3c994.image.jpg" alt="feature image">
                        <!-- help with arrow animation from https://codepad.co/snippet/AYXI3hjg -->
                        <div class="arrowAnimation upArrow">
                            <i class="fas fa-angle-up"></i>
                        </div>
                        <div class="overlay">
                            <div class="featureOverlayContent" >Running</div>
                        </div> 
                    </div>'; 
            break; 
    }

    print $info;
	
?>