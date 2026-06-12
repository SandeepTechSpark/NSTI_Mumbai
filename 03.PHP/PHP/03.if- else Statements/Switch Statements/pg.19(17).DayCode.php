<!DOCTYPE html>
<html lang="en">
<head>
     
    <title>DayCode Output</title>
</head>
<body>
    <hr><h2> Display Days Name in Words by Using Day code </h2><hr>
    
    <form method='post'>
    <pre> Enter Today code (0 to 6)  : <input type='number' name='day' placeholder='Enter day code'><br>
                                    <input type='submit' value='Submit'>   <input type='reset' value='Clear'> 
   
</pre> <hr>
</form>

        <?php
        
            if($_SERVER["REQUEST_METHOD"] == 'POST') {
                $day = $_POST['day'];

                switch($day) {
                    CASE 0 : echo "Today is SUNDAY"; break;
                    CASE 1 : echo "Today is MONDAY"; break;
                    CASE 2 : echo "Today is TUESDAY"; break;
                    CASE 3 : echo "Today is WEDNESDAY"; break;
                    CASE 4 : echo "Today is THURDAY"; break;
                    CASE 5 : echo "Today is FRIDAY"; break;
                    CASE 6 : echo "Today is SATURDAY"; break;
                    DEFAULT : echo "INVALID CODE!";
                }
            }
        ?>  <hr>
</body>
</html>