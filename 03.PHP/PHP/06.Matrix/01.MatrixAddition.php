 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matrixAddtion</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
    <h1>Matrix Addtion Program</h1>
    <!-- Step 01. Ask for Rows & Columns -->
    <form method="post">
        Enter Number of Rows : 
        <input type="number" name="rows" placeholder="No. of Rows in Matrix" required><br><br>
        Enter Number of Columns : 
        <input type="number" name="cols" placeholder="No. of Columns in Matrix" required><br><br>
        <input class='btn-success' type="submit" name='firstSubmit' value="Next">
    				<input class='btn-danger' type='reset' value='Clear'>		<br>	<a class='btn-danger' href='javascript:history.back()'> Back </a>
    </form>

    <?php
    // Step 02. Input Matrix Elements
    if(isset($_POST['firstSubmit'])) {
   // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rows']) &&isset($_POST['cols'])) {
        $rows = $_POST['rows'];
        $cols = $_POST['cols']; 

        echo "<form method='post'>";
        echo "<input type='hidden' name='rows' value='$rows'>";
        echo "<input type='hidden' name='cols' value='$cols'>";

        // Matrix A 
            echo "<h3>Enter Elements for Matrix A : </h3>";
                for($i=0;$i<$rows;$i++) {
                    for($j=0;$j<$cols;$j++) {
                        echo "A[$i][$j] : <input type='number' name='A[$i][$j]' required>";
                    } echo "<br>";
                }
        // Matrix B 
            echo "<h3>Enter Elements for Matrix B : </h3>";
                for($i=0;$i<$rows;$i++) {
                    for($j=0;$j<$cols;$j++) {
                        echo "B[$i][$j] : <input type='number' name='B[$i][$j]' required>";
                    } echo "<br>";
                }
        echo "<br><br><input class='btn-success' type='submit' name='secondSubmit'  value='Now Add Matrices'><hr>";
        echo "</form>";
            
    }
        // Step 03. Add Matrix and  Display Result -
        if(isset($_POST['secondSubmit'])) {
    // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['A']) && isset($_POST['B'])) {
        $A = $_POST['A'];
        $B = $_POST['B'];
        $rows = $_POST['rows'];
        $cols = $_POST['cols'];
        
        $C = array();

        // Matrix Addition Process
            for($i=0;$i<$rows;$i++) {
                    for($j=0;$j<$cols;$j++) {
                        $C[$i][$j] = $A[$i][$j]+$B[$i][$j] ;
                    } echo "<br>";
                }
        // Display Matrix A 
            echo "<h3>Matrix A : </h3>";
            echo "<table border='1' cellpadding='6'>";
                for($i=0;$i<$rows;$i++){
                    echo "<tr>";
                    for($j=0;$j<$cols;$j++) {
                        echo "<td>".$A[$i][$j]."</td>";
                    } echo "</tr>";
                } 
                    echo "</table>";
        // Display Matrix B 
        echo "<h3>Matrix B : </h3>";
            echo "<table border='1' cellpadding='6'>";
                for($i=0;$i<$rows;$i++){
                    echo "<tr>";
                    for($j=0;$j<$cols;$j++) {
                        echo "<td>".$B[$i][$j]."</td>";
                    } echo "</tr>";
                } 
                    echo "</table>";
        //Display Resultant Matrix -
        echo "<h3>Matrix (A+B) : </h3>";
            echo "<table border='1' cellpadding='6'>";
                for($i=0;$i<$rows;$i++){
                    echo "<tr>";
                    for($j=0;$j<$cols;$j++) {
                        echo "<td>".$C[$i][$j]."</td>";
                    } echo "<br>";
                } 
                    echo "</table>";
        				echo "<br>";
        				echo "<form method='get'>";
        				echo "<input class='btn-danger' type='submit' value='Reset & Start Again'>";
        				echo "</form>";
                }
        ?>
</body>
</html>