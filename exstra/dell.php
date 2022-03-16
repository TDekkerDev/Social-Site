<?php include "../includes/connectdb.php"; ?>
<?php
    $filename = $_POST['imglocation'];
    $id = $_POST['id'];

    $sql1 = "DELETE FROM comment WHERE post_id = :id";
    $sth1 = $db->prepare($sql1);
    $sth1->execute(['id' => $id]);

    $sql2 = "DELETE FROM bericht WHERE id = :id";
    $stmt2 = $db->prepare($sql2);
    $stmt2->execute(['id' => $id]);
    unlink("C:/xampp/htdocs/hellowordsource/Social-Site/uplode_media/".$filename);
    header("Location: ../create-bericht/upload_done_change.php");
    exit();


?>