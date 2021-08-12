<?php
 
  include('header.php');

//  if(isset($_SESSION['USER_LOGIN']) && $_SESSION['USER_LOGIN']!= '')
// {
   
// }
// else
// {
//   header("location:login.php");
//   exit();
// }


?>
<body>
  <div class="wapper">
  	<section class="users">
      <header>
        <?php
          include('connection.inc.php');

        $query=mysqli_query($con,"SELECT * FROM users WHERE user_id = {$_SESSION['USER_ID']}");

         if(mysqli_num_rows($query) >0)
         {
               $row=mysqli_fetch_assoc($query);

         }
       
        ?>
  	      <div class="content">
  	        <img src="img..jpg" alt="">
  	             <div class="details">
  	             	<span><?php echo $row['fname']." ".$row['lname']?></span>
  	             	      <p><?php  echo $row['status'];?></p>
  	             </div>
  	      </div>
  	      <a href="logout.php?logout_id=<?php echo $row['user_id'] ?>" class="logout">Logout</a>
       </header>
       <div class="search">
       	<span class="txt"> Select An User To start Chat</span>
       	<input type="text"   placeholder="Enter Name to Search" name="">
       	<button><i class="fa fa-search"></i></button>
       </div>
       <div class="users-list">
       
       	  
       </div>
     </section>
  </div>
  <script src="js/user.js"></script>
</body>
</html>