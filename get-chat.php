<?php

include('connection.inc.php');
if(isset(  $_SESSION['USER_ID']))
{
    $outgoing_id=mysqli_real_escape_string($con,$_POST['outgoing_id']);
    $incoimg_id=mysqli_real_escape_string($con,$_POST['incoming_id']);
    $output="";


    $sql="select * from message where(outgoing_msg_id = {$outgoing_id} and incoming_msg_id= {$incoimg_id})
          or (outgoing_msg_id = {$incoimg_id} and incoming_msg_id= {$outgoing_id}) order by msg_id desc";


  

        $query=mysqli_query($con, $sql);
        if(mysqli_num_rows($query)>0){
            while($row=mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .='	<div class="chat outgoing">
				                <div class="chat-details">
                                    <p>'.$row['message'].'</p>
                                </div>
                                 </div>';
                    }
                    else{
                        $output .=' <div class="chat incoming">
                                    <div class="chat-details">
                                    <p>'.$row['message'].'</p>
                                    </div>
                                </div>';
                    }
           }
                   
          

       }
       echo $output;
}
else
{
    header('login.php');
}

?>