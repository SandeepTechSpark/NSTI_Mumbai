<?php
session_start();
if(isset($_SESSION['userId'])){
				echo "<h4>Welcome".$_SESSION['userId']."</h4>";
				echo "<a href='04.logout.php'>Log Out</a>";
} else echo "<h4>Please Log In Again</h4>";
?>