<?php

        session_start();
	include 'config.php';
	$r=0;
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




		 $fq="SELECT * from UserInfo WHERE username LIKE '$user'";
                                   	        $fq1=$conn->query($fq);
						$r=$fq1->num_rows  ;
						echo $r;
		if($r) {
			header('location:../html/signup_em.html');
			exit();
		}

						$pq="SELECT * from UserInfo WHERE phone LIKE '$phone'";
                                                $pq1=$conn->query($pq);
                                                $r=$pq1->num_rows  ;
                                                echo $r;
                if($r) {
			header('location:../html/signup_ep.html');
			exit();
                }
		 $uq="SELECT * from UserInfo WHERE email LIKE '$email'";
                                                $uq1=$conn->query($uq);
                                                $r=$uq1->num_rows  ;
                                                echo $r;
                if($r) {
			header('location:../html/signup_ee.html');
			exit();
                }


        //insert user info into user info table

	if(!$r) {
                $create="INSERT INTO UserInfo(name,username,password,gender,age,phone,email)VALUES('$name','$user','$pass','$gender','$age','$phone','$email')";
		if(mysqli_query($conn,$create)) {
			header('location:../html/proceed2.html');       
		}
		else { 
			header('location:../html/index2.html');
		}
	}
		mysqli_close($conn); 
?>

