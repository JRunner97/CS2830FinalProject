<?php
// Created by Professor Wergeles for CS2830 at the University of Missouri

    // Start the session
    session_start();
    
    unset($_SESSION['currentUserId']);
    unset($_SESSION['currentUser']);
	
	header("Location: loginHandler.php");
	exit;
?>
