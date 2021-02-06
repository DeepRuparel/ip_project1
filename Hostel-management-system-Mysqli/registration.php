<?php
//dbms connectivity
require('config.php');


$num1 = range(9,0);
$num2 = range(9,0);
	$n1 = array_rand($num1);
	$n2 = array_rand($num2);
	
	$sum = $n1 + $n2;
	$res = $n1." + ".$n2;
if(isset($_POST['submit']))
{
if($_POST['c1']==$_POST['c2'])
{
	$n = $_POST['uname'];
	$pass = $_POST['upass'];
	$p = md5($pass);
	$em = $_POST['umail'];
	$gen = $_POST['gender'];
	$mob = $_POST['umob'];
	$add = $_POST['address'];
	
	

$q = "select mob from users where mob='$mob' or email='$em'";    //checking user if already exists
$cq = mysqli_query($con,$q);
$ret = mysqli_num_rows($cq);
if($ret == true)
{
	echo "<center><h2 style='color:red'>Mobile number or Email-Id is already registered</h2></center>";
}
else
{
	$regcode = rand(20000,10000);
	$_SESSION['rc']=$regcode;
	$query = "insert users values('$regcode','$n','$p','$em','$gen','$mob','$add')";
	mysqli_query($con,$query);
	echo "<center><h2 style='color:green'>You are Registered</h2></center>";
	echo "<center><b><h2 style='color:green'>Your registration code is $regcode</h2></b></center>";
	
	
}
}
else  //if wrong captcha is submitted
{
	echo '<script>
	alert("Wrong Captcha")
	</script>';
}
}



?>
<html>
<head>
<script>
	
	function refresh()
	{
		document.location='./index.php?option=regs';
	}
</script>
</head>
<body style="background-color:#E5E5E5">

<div align="center">
<form method="post">
	<fieldset style="display: inline-flex; background-color: #D8D8D8;">
	<legend><font size="+2"><strong>Registration</strong></font></legend>
	<p><b>UserName : </b><input type="text" name="uname" required/></p>
    <p><b>Password : </b><input type="password" name="upass" required/></p>
    <p><b>Email : </b><input type="email" name="umail" required/></p>
    <p><b>Gender : </b><input type="radio" name="gender" value="m">Male&nbsp;<input type="radio" name="gender" value="f">Female</p>
    <p><b>Mobile No. : </b><input type="text" name="umob" required/></p>
    <b>Address : </b><textarea placeholder="Address" name="address"></textarea>
	

<fieldset style="display: inline-flex; background-color: #D8D8D8;"><legend><strong>Verification</strong></legend><p><?php
error_reporting(1);
echo $res." = ";
?>
<input type="hidden" name="c1" value="<?php echo $sum; ?>">
<input type="text" name="c2" autofocus placeholder="Enter Sum"></p></fieldset><br>
    <p><input type="submit" name="submit" value="Register"><input type="reset" onClick="refresh()"></p>
</form>
</div>






</body>
</html>