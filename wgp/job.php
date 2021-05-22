<?php
if(isset($_POST['Name']))
{
 
    $server="localhost";
$username ="root";
$password="";
$con= mysqli_connect($server,$username,$password,"job");

if(!$con)
{
die("connection failed due to" . mysqli_connect_error()) ;

} //echo "success";
$name = $_POST['Name'];
$mail=$_POST['mail'];
$message=$_POST['message'];
$phone=$_POST['number'];
$resume=$_POST['resume'];

$sql="INSERT INTO job.inc (Name,email,message,phone,resume)
VALUES( '$name','$mail','$subject','$message','$phone',$resume)";



if($con->query($sql)== true)
{
	header("location: index.php?error=recordinsertedsuccessfully ");
    $insert = true;
    
}
else
echo "fail $con->error";

$con->close();}


?>