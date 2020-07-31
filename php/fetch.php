<?php

	session_start();
	include("config.php");

	$conn=mysqli_connect($server,$username,$password,$db);

	if(!$conn) {
		header('location:../html/index3.html');
	}	
	else{ };
	
	$sql1="SELECT * 
	       FROM user_info";
	
	$result=mysqli_query($conn,$sql1);
	
	if($result)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<br>"."Name: " . $row["name"]. "<br>" . "Email:" . $row["email"]. "<br>". "Phone number:" . $row["phone"]. "<br>".
			"Username:" . $row["username"]. "<br>". "Gender:" . $row["gender"]. "<br>";
		}
	}
	else
	echo "no results";

	mysqli_close($conn);

?>
			
	

	
	
	

	
