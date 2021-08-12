<?php
include('connection.inc.php');
if(isset($_SESSION['USER_ID']))//if user is logged then come to this page otherwise go to login
{
  $logout_id=mysqli_real_escape_string($con,$_GET['logout_id']);
  if(isset($logout_id))//if  logout id is set
  {
      $status="Offline Now";
      //once user logout the we'll update this status  TO OFFLINE  AND IN THE login form
      // we'll again update the status to active now  if user logged sucessfully
      $sql=mysqli_query($con,"update users set  status='$status' where user_id= $logout_id");
      if($sql)
      {
          session_unset();
          session_destroy();
          ?>
          <script>
              window.location.href='login.php';
          </script>
          <?php
      }
      else
      {
        ?>
        <script>
            window.location.href='user.php';
        </script>
        <?php   
      }
  }
}
else
{
    ?>
    <script>
        window.location.href='login.php';
    </script>
    <?php

}






?>