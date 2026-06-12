<html>
<head><title>checkbox</title></head>
<body>
<hr><h2>Check Box Event Test </h2><hr>
<form method="post">
   <b> Please check at one among these Courses : </b> <hr><br> 
    <input type="checkbox" name="course[]" value="PHP"> PHP<br><br>
    <input type="checkbox" name="course[]" value="Java Script"> Java Script<br><br>
    <input type="submit" name="submit" value="submit">
    </form>
        
        <?php
        if(isset($_POST['submit'])){
            if(isset($_POST['course'])) echo "check Box Selected  &  ".$_POST['course'];
            else echo "check Box not selected";
        }
        ?>
        </body>
</html>
