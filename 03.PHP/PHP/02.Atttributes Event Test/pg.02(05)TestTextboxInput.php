<html>
<head><title>TextBox</title></head>
<body>
    <hr><h2> Textbox Input Event Test </h2><hr>
<form method="post">
        Enter Name : 
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>
        <?php
        if(isset($_POST['name'])) {
        echo "you Entered : ". $_POST['name'];
            }
    ?>
</body>
</html>