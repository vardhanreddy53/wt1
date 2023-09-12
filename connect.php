<?php
$uname="root";
$pass="Naveen@123";
$server="localhost";
$dbname="wt";
$con=mysqli_connect($server,$uname,$pass,$dbname);
if(!$con){
    die('Could not connect: '.mysqli_connect_error());  
}
?>