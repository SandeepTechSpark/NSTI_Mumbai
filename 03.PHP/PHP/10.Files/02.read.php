<?php
if(file_exists('sample.txt')) {
$file = fopen('sample.txt','r');
$content = fread($file, filesize('sample.txt'));
fclose($file);
echo "<h2>$content</h2>";
} else echo "<h2>Sorry! File not found </h2>";
?>