<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MatrixMultiplication</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
    <h1>Matrix Multiplication Program (Plain Text Output)</h1>
    <!-- Step 01. Ask for Rows & Columns -->
    <form method="post">
        Enter Number of Rows of Matrix(A): 
        <input type="number" name="rowsA" placeholder="No. of Rows in Matrix(A)" required><br><br>
        Enter Number of Columns of Matrix(A) & Rows of Matrix(B) : 
        <input type="number" name="colsA" placeholder="No. of Columns in Matrix(A)" required><br><br>
        Enter Number of Columns of Matrix(B): 
        <input type="number" name="colsB" placeholder="No. of Columns in Matrix(B)" required><br><br>
        <input class='btn-success' type="submit" name='firstSubmit' value="Next"> <input class='btn-danger' type="reset" value="Clear">
    </form>

    <?php
    // Step 02. Input Matrix Elements
    if(isset($_POST['firstSubmit'])) {
   // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['rows']) &&isset($_POST['cols'])) {
        $rowsA = $_POST['rowsA'];
        $colsA = $_POST['colsA'];
        $colsB = $_POST['colsB']; 

        echo "<form method='post'>";
        echo "<input type='hidden' name='rowsA' value='$rowsA'>";
        echo "<input type='hidden' name='colsA' value='$colsA'>";
        echo "<input type='hidden' name='colsB' value='$colsB'>";

        // Matrix A 
            echo "<h3>Enter Elements for Matrix (A) : </h3>";
                for($i=0;$i<$rowsA;$i++) {
                    for($j=0;$j<$colsA;$j++) {
                        echo "A[$i][$j] : <input type='number' name='A[$i][$j]' required>";
                    } echo "<br>";
                }
        // Matrix B 
            echo "<h3>Enter Elements for Matrix B : </h3>";
                for($i=0;$i<$colsA;$i++) {
                    for($j=0;$j<$colsB;$j++) {
                        echo "B[$i][$j] : <input type='number' name='B[$i][$j]' required>";
                    } echo "<br>";
                }
        echo "<br><br><input class='btn-success' type='submit' name='secondSubmit'  value='Now Multiply Matrices'><hr>";
        echo "</form>";
    }
        // Step 03. Add Matrix and  Display Result -
        if(isset($_POST['secondSubmit'])) {
    // if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['A']) && isset($_POST['B'])) {
        $A = $_POST['A'];
        $B = $_POST['B'];
        $rowsA = $_POST['rowsA'];
        $colsA = $_POST['colsA'];
        $colsB = $_POST['colsB'];
        
        $C = array();

        // Initialize Result Matrix with Zeros
            for($i=0;$i<$rowsA;$i++) {
                for($j=0;$j<$colsB;$j++) {
                    $C[$i][$j] = 0;
                    for($k = 0; $k < $colsA; $k++) {
            $C[$i][$j] += $A[$i][$k] * $B[$k][$j];
                    }
                }
            }

    
// ================= Display Results ========================
        // Display Matrix A 
            echo "<h3>Matrix A : </h3>";
            echo "<table border='1' cellpadding='6'>";
                for($i=0;$i<$rowsA;$i++){
                    echo "<tr>";
                    for($j=0;$j<$colsA;$j++) {
                        echo "<td>".$A[$i][$j]."</td>";
                    } echo "</tr>";
                } 
                    echo "</table>";
        // Display Matrix B 
        echo "<h3>Matrix B : </h3>";
            echo "<table border='1' cellpadding='6'>";
                for($i=0;$i<$colsA;$i++){
                    echo "<tr>";
                    for($j=0;$j<$colsB;$j++) {
                        echo "<td>".$B[$i][$j]."</td>";
                    } echo "</tr>";
                } 
                    echo "</table>";
        //Display Resultant Matrix -
        echo "<h3>Matrix C => (AXB) : </h3>";
            echo "<table border='1' cellpadding='6'>";
                for($i=0;$i<$rowsA;$i++){
                    echo "<tr>";
                    for($j=0;$j<$colsB;$j++) {
                        echo "<td>".$C[$i][$j]."</td>";
                    } echo "</tr>";
                } 
                    echo "</table>";
                }
        ?>
</body>
</html>