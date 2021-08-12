<?php
  include('header.php');
?>
<body>
  <div class="wapper">
  	<section class="form login">
  		<header>Realtime Chat App</header>
  	   <form action="#">
  	 
  	   <div class="field input">
  	   			<label>Email Address</label>
  	   			<input type="text" name="login_email" id="login_email" placeholder=" Enter Your  Email">
  	   		 <span style="color:red" class="login_field_error" id="login_email_error"></span> 	
  	   		</div>
          <div class="field input">
  	   			<label>Password</label>
  	   			<input type="password"  name="login_password" id="login_password" placeholder=" Enter Your Password">
  	   			<i class="fa fa-eye" aria-hidden="true"></i>
  	   			
  	   		</div>
  	   		<span style="color:red" class="login_field_error" id="login_password_error"></span> 	
  	        
  	       <div class="field button">
  	       	 	<button type="button" class="btn btn-dark" onclick="user_login()" >Contiune to Chat</button>
            <span style="color:red" class="login_btn"></span>
  	       </div>
  	   </form>
  	   <div class="link">Not Yet Signed Up?<a href="register.php">SignUp Now</a></div>
     </section>
  </div>
    <script src="js/pass-show-hide.js"></script>
        <script src="js/Custom.js"></script>
</body>
</html>