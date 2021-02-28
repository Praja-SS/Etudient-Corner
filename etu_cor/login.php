<?php
session_start();
if(isset($_SESSION['login_error']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("Invalid Username or Password")}</script>';
		unset($_SESSION['login_error']);
	}
if(isset($_SESSION['register_error']))
	{	
		echo '<script type="text/javascript">window.onload = function(){alert("Error occured while registering")}</script>';
		unset($_SESSION['register_error']);
	}
?>
<html>
<link rel="stylesheet" href="login.css">

<h1>ETUDIENT CORNER</h1>
<br>
<br>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="POST" action="registertest.php">
			<h3>SIGN UP</h3>
			<input type="text" name="username" placeholder="Username" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<input type="text" name="college" placeholder="College/School Name" />
			<br>
			<input type="submit" name="signup" value="Sign Up">
		</form>
	</div>
	<div class="form-container sign-in-container">
	<form method="POST" action="logintest.php">
			<h3>SIGN IN</h3>
			<input type="text" name="username" placeholder="Username" />
			<input type="password" name="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<input type="submit" name="signin" value="Sign In">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<button class="appear" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<button class="appear" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</html>