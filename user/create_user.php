<?php include "../includes/connectdb.php"; ?>
<?php
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $sql = "INSERT INTO `users` (`user_name`, `password`, `name`) VALUES (:user_name, :password, :name)";
    $stmt = $db->prepare($sql);
    $stmt->execute(['user_name' => $uname, 'password' => $password, 'name' => $name]);
    header("Location: create_done.php");
    exit();
?>
    