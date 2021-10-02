<?php

$username=$_POST["username"];
echo $username;
echo "<br>";
$password=$_POST["password"];
echo $password;
echo "<br>";

$conn=mysqli_connect("localhost","root","","ggpf");

$datetime=date("d/m/y")." ".date("h:i:sa");
$sql="select * from admin where username='$username' or password='$password'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res,MYSQLI_BOTH);

if($row["username"]==$username)
{
	if($row["password"]==$password)
	{
		$up="update admin set date='$datetime' where username='$username'";
		if(mysqli_query($conn,$up))
		{
		//echo "login success";
		session_start();
		$_SESSION['admin']=$username;
		header("location:dashboard.php");
		}
		else
			{
				echo "error";
			}
		
	}
	else
	{
		echo "Password incorrect";
	}
}
else
{
	echo "Username incorrect";
}
?>