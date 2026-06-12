<?php
$email = "palji12122@gmail.com";
if(preg_match("/^[\w\.-]+@[\w\.-]+\.\w+$/",$email)) {
				echo "Valid Email";
} else echo "Invalid Email";
?>