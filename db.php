<?php
$host="localhost";/* the host domain name*/
$directory="root";/* the directory name*/
$password="";/*enter the root password by default it is ""*/
$database="bhuproject";/*name of the database in mysqli phpmyadmin*/

if($con=mysqli_connect($host,$directory,$password,$database))/*checking for connectivity status*/
{print("");}
else
die("database not found");
?>