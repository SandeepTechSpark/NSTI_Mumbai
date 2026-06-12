<?php
$file = fopen('sample.txt','w');
$text = "hello, this is file handling in PHP.";
								fwrite($file,$text);
fclose($file);
echo "<h2>file created and data written successfully.</h2>";
?>