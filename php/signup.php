<?php

        session_start();
	include 'config.php';
	$name=$_POST['name'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$_SESSION['currentuser']=$user;
        //connection to database server

                $conn=mysqli_connect($server,$username,$password,$db);
                if($conn) { }
		else { 
			header('location:../html/index3.html');
		}

        //insert user info into user info table


                $create="INSERT INTO UserInfo(name,username,password,gender,age,phone,email)VALUES('$name','$user','$pass','$gender','$age','$phone','$email')";
		if(mysqli_query($conn,$create)) {
			header('location:../html/proceed2.html');       
		}
		else { 
			header('location:../html/index2.html');
		}

		mysqli_close($conn); 
?>

