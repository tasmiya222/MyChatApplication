<?php

include('connection.inc.php');
// define variables and set to empty values
$login_email="";
$login_password="";
//
$login_email=mysqli_real_escape_string($con,$_POST['login_email']);
$login_password=mysqli_real_escape_string($con,$_POST['login_password']);
 //retrive into Database
$res=mysqli_query($con,"select * from users where email='$login_email'");

$check_user=mysqli_num_rows($res);
if($check_user>0)
{    

	$row=mysqli_fetch_assoc($res);
	//updating user status to active if user is login sucessfully
	$status="Active Now ";
	$sql2=mysqli_query($con,"update users set  status='$status' where user_id= $row[user_id]");
	if($sql2)
	{
	$_SESSION['USER_LOGIN']="yes";
    $_SESSION['USER_ID']=$row['user_id'];
	
	
	echo "valid";
	}
}
else
{    
	echo "wrong";
}


?>