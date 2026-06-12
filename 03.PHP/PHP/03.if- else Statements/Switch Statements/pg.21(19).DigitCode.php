65<!DOCTYPE html>
<html lang="en">
<head>
     
    <title>DigitCodeOutput</title>
</head>
<body>
    <hr><h2>Display Digits Name in Words by Using  code </h2><hr>
<form method='POST'>
    <pre> Enter any Digit code (0 to 9)  : <input type='number' name='digit' placeholder='Enter digit code'><br>
                                    <input type='submit' name='submit' value='Submit'>   <input type='reset' name='reset' value='Clear'> 
   
</pre> <hr>
</form>

        <?php
        
            if($_SERVER["REQUEST_METHOD"] == 'POST') {
                $digit = $_POST['digit'];

                switch($digit) {
                    CASE 0 : echo "It is ZERO"; break;
                    CASE 1 : echo "It is ONE"; break;
                    CASE 2 : echo "It is TWO"; break;
                    CASE 3 : echo "It is THREE"; break;
                    CASE 4 : echo "It is FOUR"; break;
                    CASE 5 : echo "It is FIVE"; break;
                    CASE 6 : echo "It is SIX"; break;
                    CASE 7 : echo "It is SEVEN"; break;
                    CASE 8 : echo "It is EIGHT"; break;
                    CASE 9 : echo "It is NINE"; break;
                    DEFAULT : echo "INVALID CODE!";
                }
            }
        ?>  <hr>
</body>
</html>