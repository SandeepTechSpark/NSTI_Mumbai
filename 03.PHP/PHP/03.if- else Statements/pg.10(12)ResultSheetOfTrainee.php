<html>
<head><title>ResultSheetOfTrainee</title></head>
<body bgcolor='lightyellow'>
<label><b><u>Details of Trainee</u> :  </b> Please fill up your details very carefully<hr>
<form method='post'>
    <div id='pp' style = "background-color : aqua;">
    <label>Name     :       <input type='text' name='tname' placeholder='Enter Your Name' required></label><br>
    <label>Select Trade :
            <select name = "trade">
                <option value=" " selected disabled> Select Trade </option>
                <option value="CSA"> CSA </option>
                <option value="EM"> EM </option>
                <option value="IT"> IT </option>
            </select>
    </label><br>
    <label>Roll_No  :       <input type='number' name='roll' placeholder='Enter Your Roll Number' required></label><br>
    <label>Mobile_No    :      <input type='number' name='mobile' placeholder='Enter Your Mobile Number' required></label><br>
    <hr>
    <h4>Fill up Your Marks in Particular Subjects :</h4>
    01.Networking : <input type='number' name='net' min='0' max='100' placeholder='Marks in Networking' required><br>
    02.Java Script : <input type='number' name='js' min='0' max='100' placeholder='Marks in Java Script Marks' required><br>
    03.MySQL      : <input type='number' name='mysql' min='0' max='100' placeholder='Marks ins MySQL' required><br>
    04.Python     : <input type='number' name='python' min='0' max='100' placeholder='Marks in Python' required><br>
    05.PHP         : <input type='number' name='php' min='0' max='100' placeholder='Marks in PHP' required><hr>
                    <input type='submit' name='submit' value='Submit'>
                    <input type='reset' name='reset' value='Clear Form'>
    </div>
</form>
<center>
<hr>
<h2> -------------------------- Result Sheet of A Trainee ---------------------------</h2>
<hr>
</center>
    <?php
    if(isset($_POST['submit'])) {
        $traineeName = $_POST['tname'];
        $trade =  $_POST['trade'];
        $rollNumber =  $_POST['roll'];
        $mobileNumber =  $_POST['mobile'];
        $net =  $_POST['net'];
        $js =  $_POST['js'];
        $mysql =  $_POST['mysql'];
        $python =  $_POST['python'];
        $php =  $_POST['php'];
        $totalMarks = ($net+$js+$mysql+$python+$php);
        $percentage = ($totalMarks)/5;
        $result='';
if($net<30 ||$js<30 || $mysql<30 || $python<30 ||$php<30) $result= "Fail";
else $result = "Pass";
// ========================= Grade Calculation ==============================
        $grade = "";
if($percentage>=90) $grade="A+";
else if ($percentage>=80) $grade="A";
    else if ($percentage>=70) $grade="B+";
        else if ($percentage>=60) $grade="B";
            else if ($percentage>=50) $grade="C+";
                else if ($percentage>=40) $grade="C";
                    else if ($percentage>=30) $grade="D";
                        else $grade="E";
echo "<table border='1' cellspacing='0' cellpadding='10' align='left'>
<tr><th colspan='2'>Trainee Datails  </th></tr>
<tr><th>Name  </th><td align='center'>$traineeName</td></tr>
<tr><th>Trade  </th><td align='center'>$trade</td></tr>
<tr><th>Roll Number  </th><td align='center'>$rollNumber</td></tr>
<tr><th>Mobile Number  </th><td align='center'>$mobileNumber</td></tr>
</table>";
echo "<table border='2' cellspacing='0' cellpadding='12' align='center'>
<tr><th colspan='2'>Trainee's Report Card</th></tr>
<tr><th>Name of Subjects</th><th>Obtained Marks</th></tr>
<tr><th>Networking</th><td align='center'>$net</td></tr>
<tr><th>Java Script</th><td align='center'>$js</td></tr>
<tr><th>MySQL</th><td align='center'>$mysql</td></tr>
<tr><th>Python </th><td align='center'>$python</td></tr>
<tr><th>PHP</th><td align='center'>$php</td></tr>
<tr><th>Total Marks</th><td align='center'><b>$totalMarks</b></td></tr>
                    <tr><th colspan='2'>Trainee's Performance Card</th></tr>
                    <tr><th>Percentage</th><td align='center'><b>$percentage</b></td></tr>
                    <tr><th>Result</th><td align='center'><b>$result</b></td></tr>
                    <tr><th>Grade</th><td align='center'><b>$grade</b></td></tr>
</table>";
echo "<hr><hr>";
}    
    ?>

</body>
</html>