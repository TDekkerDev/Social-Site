<?php
include "../includes/connectdb.php";
$auteur = $_POST['auteur'];
$titel = $_POST['titel'];
$bericht = $_POST['bericht'];
$id = $_POST['id'];

$sql = "UPDATE bericht SET Auteur = :auteur, Titel = :titel, Bericht = :bericht WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->execute([':auteur' => $auteur, ':titel' => $titel , ':bericht' => $bericht , ':id' => $id]);
echo "Data is toegevoegd";
header("Location:upload_done_change.php");

?>