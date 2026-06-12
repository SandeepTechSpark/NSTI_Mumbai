<html>
<head><title>Dropdown</title></head>
    <body>
    <hr><h2> Dropdown Event Test </h2><hr>
        <form method = "post">
            Select Trade :
            <select name = "trade">
                <option value=" " selected disabled> Select Trade </option>
                <option value="CSA"> CSA </option>
                <option value="EM"> EM </option>
                <option value="IT"> IT </option>
            </select>
            <input type= "submit" name= "submit" value="submit">
            </form>
                <?php
                if(isset($_POST['submit'])) {
                    echo "Selected Trade : " . $_POST['trade'];
                }
            ?>