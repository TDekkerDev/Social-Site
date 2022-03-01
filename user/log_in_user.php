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
<div class="row justify-content-center">
<div class="jumbotron login col-md-3">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>user username</label>
     	<input class="form-control" id="exampleInputPassword1" type="text" name="uname" placeholder="User Name"><br>

     	<label>User password</label>
     	<input class="form-control" id="exampleInputPassword1" type="password" name="password" placeholder="Password"><br>

     	<button class="btn btn-primary" type="submit">Login</button>
		 </div>
         </div>
<?php include "../includes/footer.php"; ?>