

<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://kit.fontawesome.com/a39a6ed324.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<head>
	<style type="text/css">
		.chat-user {
	padding: 15px 20px;
   
}

.fa-arrow-left {
	margin-right: 20px;
	font-size: 1.2rem;
}

.chat-box {
	height: 500px;
	background-color: #f2f2f2;
    overflow-y: auto;

	padding: 20px;
}

.chat p {
	word-wrap: break-word;
	padding: 8px 16px;
	box-shadow: 0 0 32px rgb(0 0 0 / 10%), 0 16px 16px -16px rgb(0 0 0 / 10%) ;
}

.outgoing {
	display: flex;
}

.outgoing .chat-details {
	margin-left: auto;
	max-width: calc(100% - 130px);
}

.outgoing .chat-details p {
	background-color: #333;
	color: #fff;
	border-radius: 18px 18px 0 18px;
}

.incoming {
	display: flex;
	align-items: flex-end;
}

.incoming img {
	height: 35px;
	width: 35px;
	border-radius: 50%;
	margin-bottom: 12px;
}

.incoming .chat-details {
	margin-right: auto;
	margin-left: 10px;
	max-width: calc(100% - 130px);
}

.incoming .chat-details p {
	background-color: #fff;
	color: #333;
	border-radius: 18px 18px 18px 0;
}

:is(.users-list, .chat-box)::-webkit-scrollbar{
	width: 0px;
}

.typing-area {
	padding: 18px 30px;
	display: flex;
	justify-content: space-between;
}

.typing-area input {
	height: 45px;
	width: calc(100% - 50px);
	font-size: 17px;
	border: 1px solid #ccc;
	padding: 0 13px;
	border-radius: 5px;
	outline: none;
}

.typing-area button {
	width: 55px;
	border: none;
	outline: none;
	background-color: #333;
	color: #fff;
	font-size: 19px;
	cursor: pointer;
	border-radius: 0 5px 5px 0;

}

	</style>
</head>
	<div class="sec">
		<div class="chat-wrapper">
			<div class="chat-user">
				<div class="chat-content">
                <?php
                include('connection.inc.php');
                   $user_id=mysqli_real_escape_string($con,$_GET['user_id']);
                        $query=mysqli_query($con,"SELECT * FROM users WHERE user_id = '$user_id'");

                        if(mysqli_num_rows($query) >0)
                        {
                            $row=mysqli_fetch_assoc($query);

                        }
                    
                        ?>
					<a href="user.php"><i class="fas fa-arrow-left"></i></a>
					<div class="details">
						<span><?php echo $row['fname']." ".$row['lname']?></span>
                        <p><?php  echo $row['status'];?></p>
					</div>
				</div>
			</div>
			<div class="chat-box">
				
				
			</div>
            <form action=""  class="typing-area" autocomplete="off">
  <input type="text"  name="outgoing_id" value="<?php echo  $_SESSION['USER_ID']; ?>" hidden >
   <input type="text"  name="incoming_id" value="<?php echo $user_id; ?>"  hidden  >
  <input type="text"  name="message" class="input-field" placeholder="Type Here..." > 
  <button><i class="fab fa-telegram-plane"></i></button>
</form>
</section>
</div>
   <script src="js/chat.js"></script>
</body>
</html>