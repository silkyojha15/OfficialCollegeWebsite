<?php

$name=$_POST["name"];
//echo $name;
//echo "<br>";
$trade=$_POST["trade"];
//echo $trade;
//echo "<br>";
$enroll=$_POST["eno"];
//echo $enroll;
//echo "<br>";
$email=$_POST["email"];
//echo $email;
//echo "<br>";
$dob=$_POST["dob"];
//echo $dob;
//echo "<br>";
$fname=$_POST["fname"];
//echo $fname;
//echo "<br>";
$mobile=$_POST["mob"];
//echo $mobile;
//echo "<br>";

$conn=mysqli_connect("localhost","root","","ggpf");
if(!$conn)
{
	echo "not connected";
}
else 
{
	//echo "connect";
}
$sql="insert into itfinal(name,en_no,trade,father,mobile,email,dob) values('$name','$enroll','$trade','$fname','$mobile','$email','$dob')";
if(mysqli_query($conn,$sql))
{
	$sql2="insert into login(enroll,dob) values('$enroll','$dob')";
	mysqli_query($conn,$sql2);
	//echo "data inserted";
	header("location:signup.php");
}
else
{
	echo "not inserted";
}


?>