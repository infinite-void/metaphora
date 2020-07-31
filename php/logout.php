<!DOCTYPE html>
<html>
	<head>
		<title>Metaphora</title>
		<meta charset = 'utf-8'>
		<link rel='stylesheet' type='text/css' href='../css/index.css' id='csslink'>
		<script lang='Javascript' id='jshref' src=''></script>
<style>
	.buttons {
		text-align:center;
	}
	button {
		width:200px;
	}
</style>
	</head>

	<body>
		<div class='pagetitle'>
			<p id="main4">
				<h1 style="text-align:center"><b>MetaPhora</b></h1>
				<h4 style="text-align:center;padding:15px;color:#5D5654;"><b>" Fuel For A Better Tomorrow "</b></h4>
			</p>
		</div>
		<div class='buttons' >
			<?php
				session_destroy();
			?>
			<h6>SUCCESSFULLY LOGGED OUT!</h6>
			<p id='main2'>New User? Sign Up Now<br>
			<button name='signup' id='signup' onclick="location.href='../html/signup.html';">SIGN UP!</button>
			</p>
			
			<p id='main3'>Already A User?<br>
			<button name='signin' id='signin' onclick="location.href='../html/signin.html';">LOG IN!</button></p>
		</div>
		<footer>
			<a href='../html/tandc.html' target='_blank'>Terms & Conditions</a>
		</footer>
	</body>
</html>
	
