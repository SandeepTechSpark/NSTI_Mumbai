<!DOCTYPE html>
<html lang="en">
<head>
     <title>MonthCodeOutput</title>
</head>
<body>
    
    <hr><h2>Display Month Name in Words Using Code </h2><hr>
    <form method='post'>
        <pre> Enter any Month Code ( 1 TO 12) : <input type='number' name='month' placeholder='Enter Your Month Code'><br>
                                    <input type='submit' name='submit' value='Submit'>  <input  type='reset' name='reset' value='reset'>
</pre><hr>                                    
    </form>

        <?php
            if($_SERVER["REQUEST_METHOD"] == 'POST') {
                $month = $_POST['month'];

                switch($month) {
                    CASE 1 : echo "It is JANUARY"; break;
                    CASE 2 : echo "It is FABRUARY"; break;
                    CASE 3 : echo "It is MARCH"; break;
                    CASE 4 : echo "It is APRIL"; break;
                    CASE 5 : echo "It is MAY"; break;
                    CASE 6 : echo "It is JUNE"; break;
                    CASE 7 : echo "It is JULY"; break;
                    CASE 8 : echo "It is AUGUST"; break;
                    CASE 9 : echo "It is SEPTEMBER"; break;
                    CASE 10: echo "It is OCTOBER"; break;
                    CASE 11 : echo "It is NOVEMBER"; break;
                    CASE 12 : echo "It is DECEMBER"; break;
                    DEFAULT : echo "INVALID CODE!";
                }
            }
        ?>
        <hr>
</body>
</html>