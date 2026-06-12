<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>squareOfNumber</title>
</head>
<body>
    <h2>Calculate Square Using Function</h2>
    <form method='post'>
        Enter a Number : 
        <input type="number" name="num" placeholder="Enter Any Number Only" required><br><br>
        <input class='btn-success' type="submit" value="Find Square">
    </form>
    <hr>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $number = $_POST['num'];
        // function definition
        function square($n){
        return $n*$n;
        }
        $result = square($number); // functioin Calling and Storing the Return value
        echo "Square of $number is $result";
    }
    ?>
</body>
</html>