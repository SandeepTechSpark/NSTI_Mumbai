<html>
<head><title>radio</title></head>
<body>
<hr><h2>Radio Button Event Test </h2><hr>
<form method="post">
   <b> Please click at one among these genders : </b> <hr><br> 
    <input type="radio" name="gender" value="Male">Male<br><br>
    <input type="radio" name="gender" value="Female">Female <br><br>
    <input type="radio" name="gender" value="Othre">Othre <br><br> 
    <input type="submit" name="submit" value="Submit">
    </form>
        
        <?php
        if(isset($_POST['submit'])){
             echo "gender : " . $_POST['gender'];
        }
        ?>
        </body>
</html>
