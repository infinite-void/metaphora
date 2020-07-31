<?php
session_start();

	$cuser=$_SESSION['currentuser'];
	$start=$_POST['start'];
	$dest=$_POST['dest'];
	$datee=$_POST['date'];
	include 'config.php';
	$conn=mysqli_connect($server,$username,$password,$db);
	if($conn) { }
	else {
		header('location:../html/index3.html');
	}
	echo $start.$dest.$datee ;
	$fq="SELECT userid from Log WHERE start LIKE '$start' AND dest LIKE '$dest' AND datee LIKE '$datee'";
	$fq1=$conn->query($fq);
echo '<table border=1 >'	;
	while($fq1){
		if($row=$fq1->fetch_assoc()) {
			$t4=$row['userid'];
			echo $t4;
			$ed="SELECT * from UserInfo WHERE username LIKE '$t4'";
			$ed1=(mysqli_query($conn,$ed));
			if($row1=mysqli_fetch_assoc($ed1)) {
				echo '<tr><th>'.$row1['phone'].'</th><td>'.$row1['email'].'</td><td>'.$row1['gender'].'</td></tr>';
			}
		}
	}
 	echo '</table>';
	if(!$fq1) {
		echo 'no records found';
	}
?>
