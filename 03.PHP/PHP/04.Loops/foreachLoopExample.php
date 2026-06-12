<!DOCTYPE html>
<html>
<head>
								<title>ForeachLoopExample</title>
</head>
<h2>Foreach Loop Display Name</h2>
<form method='post'>
				Enter names(comma Saparated) : <input type='text' name='names' required>
				<input type='submit' value='Display'>
				</form>
								
								<?php
								if($_SERVER['REQUEST_METHOD']) {
												$names = $_POST['names'];
												$names_array = explode(",",$names); // Covert string to array
												echo "<h3> Names List : </h3>";
foreach($names_array as $name) {
				echo 'trim',($name)."<br>";
}
								}
?>
</body>
</html>