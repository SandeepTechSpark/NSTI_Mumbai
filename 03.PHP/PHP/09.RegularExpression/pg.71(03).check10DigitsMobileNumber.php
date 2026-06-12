<?php
$mobile = "9170792785";
if(preg_match("/^[0-9]{10}$/",$mobile)) {
				echo "Valid Mobile Number";
} else echo "Invalid Mobile Number";
?>