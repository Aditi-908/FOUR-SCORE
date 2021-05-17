<?php
if(isset($_POST['Name']))
{
 
    $server="localhost";
$username ="root";
$password="";
$con= mysqli_connect($server,$username,$password,"contactus");

if(!$con)
{
die("connection failed due to" . mysqli_connect_error()) ;

} //echo "success";
$name = $_POST['Name'];
$mail=$_POST['mail'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$phone=$_POST['number'];

$sql="INSERT INTO contact (Name,email,subject,message,phone)
VALUES( '$name','$mail','$subject','$message','$phone')";



if($con->query($sql)== true)
{
	echo "Contact Records Inserted";
    $insert = true;
    
}
else
echo "fail $con->error";

$con->close();}


?>