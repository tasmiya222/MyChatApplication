<?php
   include('connection.inc.php');
   $outgoing_id=$_SESSION['USER_ID'];
   $query=mysqli_query($con, "select * from users where not  user_id=$outgoing_id");
  
   $output="";

   if(mysqli_num_rows($query) == 1)
   {
     $output.=" No User are Avaiable To Chat";
   }
   elseif(mysqli_num_rows($query) >0)
   {
      include('data.php');
    }
echo $output
     
?>
