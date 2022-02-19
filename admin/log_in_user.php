<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?> 
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
<?php include "../includes/footer.php"; ?>