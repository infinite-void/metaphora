<?php

        session_start();
        include 'config.php';

        //connection to database server

                $conn=mysqli_connect($server,$username,$password,$db);
                if($conn) {
                        echo 'Successfully Connected To Database Server'.'<br>';
                }
                else {
                        echo 'Connection To Database Server Failed'.'<br>';
                }

        //create user info table

		$create='CREATE TABLE UserInfo(name VARCHAR(40) NOT NULL,username VARCHAR(20) NOT NULL,password VARCHAR(20) NOT NULL,gender VARCHAR(10) NOT NULL,age INT(10) NOT NULL,phone BIGINT(200) NOT NULL,email VARCHAR(40) NOT NULL)';
                if(mysqli_query($conn,$create)) {
                        echo 'Successfully Created User Information Table'.'<br>';
                }
                else {
                        echo 'Error in Creation Of User Information Table'.'<br>';
                }

                mysqli_close($conn);
?>

