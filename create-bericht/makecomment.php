<?php   
include "../includes/connectdb.php";
$post_id = $_POST['id'];
$comment = $_POST['comment'];
$sql = "INSERT INTO comment(post_id, comment)VALUES (:post_id, :comment)";
$stmt = $db->prepare($sql);
$stmt->execute([':post_id' => $post_id, ':comment' => $comment]);
echo "Data is toegevoegd";
header("Location: ../user/show_berichten_user.php");
?>