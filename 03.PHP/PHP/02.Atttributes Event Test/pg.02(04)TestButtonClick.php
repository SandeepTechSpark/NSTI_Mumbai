<html>
<head><title>ButtonClick</title></head>
<body>
<hr><h2>Button Click Event Test </h2><hr>
<form method = "post">
    <input type="submit" name="button" value="Click Me">
    </form>
        <?php
        if(isset($_POST['button'])) {
            echo " Button Click Event is Tested ! ";
        }
    ?>
</body>
</html>