<?php 

$host="localhost";
$user="root";
$password="";
$db="project";
 
$conn = mysqli_connect($host,$user,$password,$db);

if(!$conn) {
	die("Connection failed :" .mysqli_connect_error());
}

 ?>