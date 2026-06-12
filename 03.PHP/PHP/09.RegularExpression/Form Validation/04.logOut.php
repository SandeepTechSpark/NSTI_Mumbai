<?php
session_start();
session_destroy();
echo "<h4>You Have Been Logged Out</h4>";
// header("location:02.login.php");
?>