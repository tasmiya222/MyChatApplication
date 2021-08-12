<?php
include('connection.inc.php');
if(isset(  $_SESSION['USER_ID']))
{
    $outgoing_id=mysqli_real_escape_string($con,$_POST['outgoing_id']);
    $incoimg_id=mysqli_real_escape_string($con,$_POST['incoming_id']);
    $message=mysqli_real_escape_string($con,$_POST['message']);
   if(!empty($message))
   {
       $sql=mysqli_query($con,"INSERT INTO message(outgoing_msg_id, incoming_msg_id, message) VALUES ({$outgoing_id},{$incoimg_id},'{$message}')");

   }
   // echo "INSERT INTO messages(outgoing_msg_id, incoming_msg_id, message) VALUES ({$outgoing_id},{$incoimg_id},'{$message}')";
}
else
{
    header('location:login.php');
}



?>