<?php
  include('header.php');
  include('connection.inc.php');
  if(isset($_SESSION['USER_ID']))
  {
	  header("location:user.php");
  }
?>
<body>
  <div class="wapper">
  	<section class="form signup">
  		<header>Realtime Chat App</header>
  	   <form action="#">
  	  	<div class="error-txt">This is an Error Messaage!!</div>
  	   	<div class="name-details">
  	   		<div class="field input">
  	   			<label>First Name</label>
  	   			<input type="text" name="fname" id="fname" placeholder=" Enter FirstName">
  	   			<span style="color:red" class="field_error" id="fname_error"></span>  
  	   		</div> 
  	   		<div class="field input ">
  	   			<label>Last Name</label>
  	   			<input type="text"  name="lname" id="lname" placeholder=" Enter LastName">
			   <span style="color:red" class="field_error" id="lname_error"></span>
  	   			  
  	   		</div>
  	   	</div>
  	   <div class="field input">
  	   			<label>Email Address</label>
  	   					<input type="text" name="email" id="email" placeholder=" Enter Email Address">
			    <span style="color:red" class="field_error" id="email_error"></span> 	
  	   		</div>
          <div class="field input">
  	   			<label>Password</label>
  	   				<input type="password" name="password" id="password" placeholder=" Enter Password">
  	   		  	<i class="fa fa-eye" aria-hidden="true"></i>
					 
  	   		</div>
				 <span style="color:red" class="field_error" id="pass_error"></span> 

  	         <div class="field  image ">
  	   			<label> Select Image</label>
  	   				<input type="file" name="image" id="image">
				 <span style="color:red" class=" field_error" id="image_error"></span> 	  	
  	   		</div>
  	       <div class="field button">
  	       	 	<button type="button" class="btn btn-dark" onclick="user_register()"  >Contiune to Chat</button>
            <span style="color:red" class="register_btn"></span>
  	       </div>
  	   </form>
  	   <div class="link">Alerady Signed Up?<a href="login.php">Login Now</a></div>
     </section>
  </div>
     <script src="js/pass-show-hide.js"></script>
     <script src="js/Custom.js"></script>
</body>
</html>