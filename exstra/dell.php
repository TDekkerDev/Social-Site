<?php include "../includes/connectdb.php"; ?>
<?php
    $filename = $_POST['imglocation'];
    $id = $_POST['id'];

    $sql = "DELETE FROM bericht WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $id]);
    unlink("C:/xampp/htdocs/hellowordsource/Social-Site/uplode_media/".$filename);
    header("Location: ../admin/show_berichten_admin.php");
    exit();


?>