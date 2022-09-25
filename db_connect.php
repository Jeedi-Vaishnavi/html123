<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
//Database Connection
$conn=new mysqli_connect('localhost','root',' ','ram');
if($conn->connect_error";
die("Connection faileed:". $conn->connect_error);
}else{
ssql="INSERT INTO stu(username,password,email) VALUES ('$username','$password','$email');
if(mysqli_qery($conn,$){
eco "Records added successfully.";)
else
{
echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);}
$conn->close();)
?>
