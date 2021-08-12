<?php

include('connection.inc.php');
$outgoing_id=$_SESSION['USER_ID'];
$searchTerm= mysqli_real_escape_string($con,$_POST['searchTerm']);
$output="";
$query=mysqli_query($con,"select  * from users where not  user_id=$outgoing_id and ( fname LIKE '%{$searchTerm}%' OR lname  LIKE '%{$searchTerm}%')");
if(mysqli_num_rows($query) >0)
{
       include('data.php');
}
else
{
    $output.=" No User Found Realted To your Seacrh Term";
}
echo  $output; 
?>