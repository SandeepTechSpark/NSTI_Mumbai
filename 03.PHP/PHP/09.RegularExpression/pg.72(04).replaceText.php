<?php
$str = "I love Java";
echo $str."<br><hr>";
$new = preg_replace("/Java/", "PHP", $str);
echo $new;
?>