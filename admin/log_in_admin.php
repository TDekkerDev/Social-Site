<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="login_user.php" method="post">
<div class="top row justify-content-center">
<form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>User Name</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button class="btn btn-primary" type="submit">Login</button>
		 </div>
         </div>
<?php include "../includes/footer.php"; ?>