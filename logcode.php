<?php

$enroll=$_POST["enroll"];
echo $enroll;
echo "<br>";
$dob=$_POST["dob"];
echo $dob;
echo "<br>";

$conn=mysqli_connect("localhost","root","","ggpf");

$sql="select * from login where enroll='$enroll'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

if($row["enroll"]==$enroll)
{
	if($row["dob"]==$dob)
	{
		//echo "login success";
		session_start();//creating session(session can work on any page of a website).session destroys itself after every 24 min automatically. It is a serversite variable.
		$_SESSION['login']=$enroll;//super global variable(multiple pages accessing)
		header("location:profile.php");
	}
	else
	{
		echo "Date of Birth incorrect";
	}
}
else
{
	echo "Enrollment Number incorrect";
}
?>