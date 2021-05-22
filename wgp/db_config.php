<?php
$server = "localhost";
$username = "root";
$password = "";
$database="ip";
$con=mysqli_connect($server,$username,$password,$database);
if (!$con) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}	



?>