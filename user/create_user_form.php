<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?> 
<h1>Create user</h1>
<form method="post" action="create_user.php">
    <div class="form-group">
        <label for="uname">User Name</label>
        <input type="text" class="form-control" id="uname" name="uname" placeholder="Enter user name" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
    </div>
    <div class="form-group">
        <label for="submit">submit</label>
        <input type="submit" value="Submit" class="btn btn-primary" name="submit">
</form>


<?php include "../includes/footer.php"; ?>