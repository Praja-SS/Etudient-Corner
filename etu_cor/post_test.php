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
	if(isset($_POST['btn_post']))
	{
		$cont=$_POST['content'];
		$uname=$_SESSION['uname'];
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$sql="INSERT INTO post(username,image,text) VALUES('$uname','$file','$cont')";
		$result = $conn->query($sql);
		
		if($result)
		{
			header('Location:index.php');
		}
		else
		{
			header('Location:post.php');
		}
	}
?>