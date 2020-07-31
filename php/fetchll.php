<!DOCTYPE html>
<html>
        <head>
                <title>Metaphora</title>
                <meta charset = 'utf-8'>
                <link rel='stylesheet' type='text/css' href='../css/fetchll.css' id='csslink'>
                <script lang='Javascript' id='jshref' src=''></script>
<style>
        .buttons {
                text-align:center;
        }
        button {
                width:200px;
	}
	th,td {
		text-align:center;
		width:250px;
	}
	table {
		border:2px solid black;
		color:black;
	}
</style>
        </head>

        <body>
                <div class='pagetitle'>
                        <p>
                                <div class='pagetitle'>
                        <p>
                                <h1 style="text-align:center;padding-top:50px;">MetaPhora</h1>
                                <h5 style="text-align:center;color:#5D5654;">" Fuel For A Better Tomorrow "</h5>

                        </p>

                        </p>
                </div>
		<div class='buttons'  id='main'>
			<?php
				$start=$_POST['start'];
                                $dest=$_POST['dest'];
                                $datee=$_POST['date'];
				echo 'RIDES AVAILABLE FROM '.$start.' TO '.$dest.' ON '.$datee ;
			?>
			<center><table border='1'><tr><th>Name</th><td>User ID</td><td>Gender</td><td>Email</td><td>Phone</td></tr>
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
				        $fq="SELECT userid from Log WHERE start LIKE '$start' AND dest LIKE '$dest' AND datee LIKE '$datee'";
					$fq1=$conn->query($fq);
				
				        if ($fq1->num_rows > 0) {
							while($row=$fq1->fetch_assoc()) {
				                        $t4=$row['userid'];
				                        $ed="SELECT * from UserInfo WHERE username LIKE '$t4'";
					                $ed1=(mysqli_query($conn,$ed));
				                        if($row1=mysqli_fetch_assoc($ed1)) {
                               				echo '<tr><th>'.$row1['name'].'</th><td>'.$t4.'</td><td>'.$row1['gender'].'</td><td>'.$row1['email'].'</td><td>'.$row1['phone'].'</td></tr>';
                        				}
							}
     				}		

				        if(!$fq1) {
                				echo 'no records found';
        				}
				?>

			</table></center>
		</div><div id='main2'>
		<center><button onclick="location.href='../html/findaride.html'">FIND ANOTHER RIDE!</button>
		<button onclick="location.href='../html/startaride.html'">START A RIDE!</button></div>
		<button id='logout' onclick="location.href='logout.php'">LOGOUT</button>
                <footer>
                       <center> <a href='../html/tandc.html' target='_blank'>Terms & Conditions</a>
                </footer>
        </body>
</html>

