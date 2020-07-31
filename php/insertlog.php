<?php

        session_start();
	include 'config.php';
	$start=$_POST['start'];
	$dest=$_POST['dest'];
	$datee=$_POST['date'];


	$ccuser=$_SESSION['currentuser'];echo $ccuser;

	
        //connection to database server

                $conn=mysqli_connect($server,$username,$password,$db);
                if($conn) { }
		else { 
			header('location:../html/index3.html');
		}

	//insert log
		
		$inslog="INSERT INTO `Log` (`start`, `dest`, `datee`, `userid`) VALUES ('$start', '$dest', '$datee', '$ccuser')";
		if(mysqli_query($conn,$inslog)) {
			header('location:../html/proceed3.html');       
		}
		else { 
			header('location:../html/index3.html');
		}

		mysqli_close($conn);
?>

