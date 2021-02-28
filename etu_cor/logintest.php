<?php
include('database_connection.php');
if($_POST)
{
	$host="localhost";
	$user="root";
	$pass="";
	$db="etu_cor";
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$conn=mysqli_connect($host,$user,$pass,$db);
	$query="select * from register where username='$uname' and password='$password'";
	$result=mysqli_query($conn,$query);
	if($result->num_rows == 1)
	{ 
		
		session_start();
		$_SESSION['etu_cor']='true';
		$rslogin = mysqli_fetch_array($result);
		$_SESSION['user_id'] = $rslogin['user_id'];
		$_SESSION['uname']= $rslogin['username'];
    $sub_query = "
        INSERT INTO login_details 
        (user_id) 
        VALUES ('".$rslogin['user_id']."')
        ";
        $statement = $connect->prepare($sub_query);
        $statement->execute();
        $_SESSION['login_details_id'] = $connect->lastInsertId();
        
		header('location:index.php');
	}
	else {
		echo '<script>window.alert("Incorrect Email or Password !");</script>';
	}
	
}
?>
