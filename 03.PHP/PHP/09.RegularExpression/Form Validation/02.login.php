<?php
// =============================== Input handling from User =====================
session_start();
$userId = $_POST['userId'];
$password = $_POST['password'];
// ============================= Regex Pattern =============================
$userIdPattern = "/^[a-zA-Z\d]{6,18}$/";
$userPassPattern = "/^(?=.*[A-Za-z])(?=.*[0-9])(?=.*[!@#$%^&*?])[A-Za-z0-9!@#$%^&*?]{6,20}$/";
// ================== Process to Matching User Inputs & Regex eachother ============
if(preg_match($userIdPattern,$userId) && preg_match($userPassPattern,$password)) {
				// Store in Session 
				 $_SESSION['userId'] = $userId;
				echo "You Logged In Successfully! ".$_SESSION['userId']."<br><br>";
				echo "<a href='03.welcome.php'>Go to Welcome Page</a>";
} else echo "Invalid User Id or Password Format!";
?>