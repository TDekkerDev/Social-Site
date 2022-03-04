<?php include "../includes/connectdb.php"; ?>
<?php
    $id = $_POST['id'];
    $sql = "SELECT * FROM bericht WHERE id = :id"; 
    $sth = $db->prepare($sql); 
    $sth->execute(['id' => $id]); 

    while($row = $sth->fetch()) { 
        $row["likes"] = $row["likes"] + 1;
        echo $row["likes"];
        $likes = $row["likes"];
}

        $sql2 = "UPDATE `bericht` SET likes = :likes WHERE id = :id";
        $sth2 = $db->prepare($sql2); 
        $sth2->execute([':likes' => $likes,':id' => $id]);

    header("Location: ../user/show_berichten_user.php");
    exit();


?>