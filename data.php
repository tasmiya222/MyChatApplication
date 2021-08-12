<?php
error_reporting(0);
     while($row=mysqli_fetch_assoc($query))
        {
         $sql2="SELECT * FROM messages WHERE (incoming_msg_id= {$row['user_id']} OR
          outgoing_msg_id={$row['user_id']}) AND(outgoing_msg_id={$outgoing_id} 
          OR incoming_msg_id={$outgoing_id}) ORDER BY msg_id DESC LIMIT 1 ";
          
         $query2=mysqli_query($con,$sql2);
         $row2=mysqli_fetch_assoc($query2);
         if(mysqli_num_rows($query) >0)
        {
           $result=$row2['message'];
        }
        else{
           $result="No Message Is Available";
        }
      
      //   trimming message  if word more than 28
        (strlen($result) > 28) ? $msg= substr($result , 0 , 28).'...' :$msg=$result;
       // adding you : text before msg  if login id  send msg
        ($outgoing_id === $row2['outgoing_msg_id']) ? $you="You:": $you= "";
        //check if user is offline or online
        ($row['status'] == "Offline Now") ? $offline="Offline": $offline="";
             $output.=' <a href="chats.php?user_id='.$row['user_id'].'">
                <div class="content">
               <img src="img..jpg" alt="">
               <div class="details">
               <span>'.$row['fname']." ".$row['lname'].'</span>
               <p>'.$you.$msg.' </p>
               </div>
               </div>  
               <div  class="status-dot'.$offline.'"><i class="fa fa-circle"></i>
               </i></div>
               </a>';
        
      
   }


?>