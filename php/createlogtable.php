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

        //create log table

		$create='CREATE TABLE Log(start VARCHAR(40) NOT NULL,dest VARCHAR(40) NOT NULL,datee DATE NOT NULL,userid VARCHAR(20) NOT NULL)';
                if(mysqli_query($conn,$create)) {
                        echo 'Successfully Created Log Table'.'<br>';
                }
                else {
                        echo 'Error in Creation Of Log Information Table'.'<br>';
                }

                mysqli_close($conn);
?>

