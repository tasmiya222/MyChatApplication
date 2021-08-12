<?php
include('connection.inc.php');

// define variables and set to empty values
$fname="";
$email="";
$lname="";
$password="";

$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname=mysqli_real_escape_string($con,$_POST['lname']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$added_on=date('Y-m-d h:i:s');
$status="Active Now";
$random_id = rand(10000000,10);

 //
 //retrive into Database
$check_user=mysqli_num_rows(mysqli_query($con,"select * from  users where email={$email}"));
if($check_user>0)
{

	$row=mysqli_fetch_assoc($check_user);

		echo "present";
}
else
{  
 
    mysqli_query($con,"insert into users(unique_id,fname,lname,email,password,status,added_on)values('$random_id','$fname','$lname','$email','$password','$status','$added_on')");

	echo "insert";
 }
// echo "insert into users(unique_id,fname,lname,email,password,status,added_on)values('$random_id','$fname','$lname','$email','$password','$status','$added_on')";
?>