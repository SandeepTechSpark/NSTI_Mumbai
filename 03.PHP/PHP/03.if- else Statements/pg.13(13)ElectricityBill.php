<html>
<head><title>Electricity Bill</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
<hr>
<center>
<h2>UTTAR PRADESH POWER CORPORATION LIMITED</h2>
<b> Reg. Office : 24, Ashok Marg - Gomati Nagar, Lucknow(UP)</b><hr>
<h3>(Electricity Bill)</h3><hr>
</center>
</head>
<body>
<form method='post'>
    
    <label>Please Fill up Here Consumer Details Carefully : <hr>
    Account Number      : <input type='number' name='caccount' placeholder='Enter Account Number' required><br>
    Name                : <input type='text' name='cname' placeholder='Enter Consumer Name' required><br>
    Mobile Number       : <input type='number' name='cmobile' placeholder='Enter Mobilr Number' required><br>
    Email Id            : <input type='email' name='cemail' placeholder='Enter Consumer Email' required><br>
    Units               : <input type='number' name='cunits' placeholder='Enter Consumed Units' required><hr>
                    <input class='btn-success' type='submit' name='submit' value='submit'>       <input class='btn-danger' type='reset' name='reset' value='reset'>
    </label>
    </form><hr>
        <?php 
        if(isset($_POST['submit'])) {
            $account=$_POST['caccount'];
            $name=$_POST['cname'];
            $mobile=$_POST['cmobile'];
            $email=$_POST['cemail'];
            $units=$_POST['cunits'];
echo '<pre><br><br>';
    echo "<b><u>Consumer Details </b></u><hr>";
    echo "Account Number                    : ".$account."<br>";
    echo "Consumer Name                     : ".$name."<br>";
    echo "Account Number                    : ".$account."<br>";
    echo "Mobile Number                     : ".$mobile."<br>";
    echo "Email                             : ".$email."<br><hr>";
    echo "Consumed Total Number of Units    : ".$units."<hr>";
if($units<=100) $amount = ($units*5);
else if($units>100 && $units<=200) $amount = ((100*5)+(($units-100)*7));
    else $amount = ((100*5) +(100*7)+(($units-200)*10));
    echo "Bill Amount Without Surcharge     : Rs.".$amount."<br>";    
    if($amount>1000) $surcharge=($amount*0.1);
    echo "Total Surcharge : Rs".$surcharge."<br>";
    echo "Final Amount (Including Surcharge): Rs.".($amount+$surcharge)."<hr>";
    echo"<h3 align='center'><u>(Thanks you for connecting us)</u></h3>";
}

?>
</body>
</html>