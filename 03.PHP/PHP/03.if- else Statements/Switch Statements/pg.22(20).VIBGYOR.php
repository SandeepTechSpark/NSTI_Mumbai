<!DOCTYPE html>
<html lang="en">
<head>

    <title>VIBGYOR Output</title>
</head>
<body>
    <hr><h2>Find the Full Form of VIBGYOR Colour Name Using a Particular Letter </h2><hr>
    <form method='post'>
       <pre><h3>COLOUR CODE : </h3><hr><table border='2' cellspacing='3' cellpadding='8'>
            <tr><th>V</th>
            <th>I</th>
            <th>B</th>
            <th>G</th>
            <th>Y</th>
            <th>O</th>
            <th>R</th></tr>
            
</table><hr>
    <b>Input any Colour Code According to the Upper Table : </b><input type='text' name='code' placeholder='Enter Your Code here'><br>
        <input type='submit' value='Submit'>  <input type='reset' value='Clear'> 
</form>
</pre><hr>
<?php
    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        $code = $_POST['code'];
        $code = strtoupper($code);
        $color='';
        switch($code) {
            CASE 'V' : $color="Violet"; break;
            CASE 'I' : $color="Indigo"; break;
            CASE 'B' : $color="Blue"; break;
            CASE 'G' : $color="Green"; break;
            CASE 'Y' : $color="Yellow"; break;
            CASE 'O' : $color="Orange"; break;
            CASE 'R' : $color="Red"; break;
            DEFAULT  : $color="Invalid Input! Please Select Code from Upper Table Only";
        }
        echo "Your Input Code : ". $code."<hr>";
        echo "Final Output : ".$color;
    }   
    ?>
    <hr>
</body>
</html>