<?php
session_start();
$action = $_GET['action'] ?? "" ;

if($action == 'create') {
				$_SESSION['name'] = "Rahul";
				$_SESSION['course'] = "CSA - Computer Software Application";
				echo "Session Created!";
} else if ($action == 'get'){
				if(isset($_SESSION['name']) && isset($_SESSION['course'])) {
								echo "Name : ".$_SESSION['name']."<br>";
								echo "Course : ".$_SESSION['course']."<br>";
				} else echo "No Session Data Found!";
} elseif ($action == 'destroy'){
				session_unset();
				session_destroy();
				echo "Session Destroyed!";
} else echo "Please add <mark>action</mark> with it's appropriate value (create||get||destroy) in your URL";
?>