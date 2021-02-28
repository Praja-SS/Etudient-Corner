<html>
<body>
<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="etu_cor";
$conn=new mysqli($servername,$username,$password,$dbname);
if (!$conn)
{
die('Could not connect: ' . mysql_error());
}
if(isset($_POST['signup']))
{
$uname=$_POST['username'];
$pwd=$_POST['password'];
$email=$_POST['email'];
$college=$_POST['college'];
$sql="insert into register(username, emailid, password, college) values('$uname','$email','$pwd','$college')";
$result=$conn->query($sql);
$error="Either username or password is incorrect";
if($result)
{
	$_SESSION['user_id'] = $uname;
	header('location:index.php');
}
else
{
	$_SESSION['register_error']=$error;
	header('location:login.php');
}
}
$conn->close();
?>
</body>
</html>
