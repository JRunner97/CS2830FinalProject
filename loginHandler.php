<?php	
	
    if(!session_start()){
        header("Location: error.php");
        exit;
    }
    // see if user is already logged in
    $loggedin = empty($_SESSION['currentUser']) ? '' : $_SESSION['currentUser'];
    
    // If the user is logged in, redirect them home
    if ($loggedin) {
        header("Location: homePage.php");
        exit;
    }
    
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	
	if ($action == 'loginMeIn') {
		handle_login();
	} else if ($action == 'signMeUp'){
        handle_signUp();
    } else {
		login_form();
	}
	
	function handle_login() {
		$username = empty($_POST['username']) ? '' : htmlspecialchars($_POST['username']);
		$password = empty($_POST['password']) ? '' : htmlspecialchars($_POST['password']);
        
        
        $servername = "ec2-18-221-150-95.us-east-2.compute.amazonaws.com";
        $dbUsername = "ProjectUser";
        $dbPassword = "12345";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=CS2830", $dbUsername, $dbPassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT id, username FROM users WHERE username = '$username' AND password = '$password'");
            $stmt->execute();

            //so we can use name->value pairs
            if($stmt->rowCount() > 0){
                /*  how to get data from query*/
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION["currentUserId"] = $row['id'];
                $_SESSION["currentUser"] = $row['username'];
                header("Location: homePage.php");
                exit;
            }
            else {
                $error = 'Error: Incorrect username or password';
                require "loginPage.php";
            }
            }
        catch(PDOException $e)
            {
                $error = 'Error: PDO exception';
                require "loginPage.php";
            }	
	}

    function handle_signUp() {
		$username = empty($_POST['username']) ? '' : htmlspecialchars($_POST['username']);
		$password = empty($_POST['password']) ? '' : htmlspecialchars($_POST['password']);
        
        
        $servername = "ec2-18-221-150-95.us-east-2.compute.amazonaws.com";
        $dbUsername = "ProjectUser";
        $dbPassword = "12345";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=CS2830", $dbUsername, $dbPassword);

            $stmt = $conn->prepare("SELECT username FROM users WHERE username = '$username'");
            $stmt->execute();

            // checks if a query returned a tuple from db
            // if it did then the username is taken
            if($stmt->rowCount() == 0){

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO users (username, password, email, first_name, last_name)
                VALUES ('$username', '$password', '$email', '$first_name', '$last_name')";

                // note use of exec() instead of execute()
                $conn->exec($sql);
                
                $stmt = $conn->prepare("SELECT id, username FROM users WHERE username = '$username'");
                $stmt->execute();

                //so we can use name->value pairs
                if($stmt->rowCount() > 0){
                    /*  how to get data from query*/
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                    $_SESSION["currentUserId"] = $row['id'];
                    $_SESSION["currentUser"] = $row['username'];
                    header("Location: homePage.php");
                    exit;
                }
                else {
                    $error = 'Error: Failed Login Action';
                    require "loginPage.php";
                }
            }
            else {
                // TODO add flash messages
                // redirects user back to createUser.html page if username already taken
                $error = 'Error: Username already taken';
                require "loginPage.php";
            }
        }
        catch(PDOException $e)
            {
                $error = 'Error: PDO exception';
                require "loginPage.php";
            }	
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "loginPage.php";
	}
	
?>