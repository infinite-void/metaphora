<?php
	session_start();
	include 'config.php';

	$user1=$_POST['cusername'];
	$pass1=$_POST['cpassword'];
	$_SESSION['currentuser']=$user1;
	echo $user1.$pass1.$_SESSION['currentuser'];
	$conn=mysqli_connect($server,$username,$password,$db);

	if(!$conn) {
		header('location:../html/index3.html');
	}
	else { }
	$sql1="SELECT * FROM UserInfo WHERE username='$user1'";
	$row=mysqli_fetch_assoc(mysqli_query($conn,$sql1));
	if($row['password']==$pass1){
		header('location:../html/proceed4.html');
	}
	else {	
		header('location:../html/signin2.html');
	}
 		
?>			
