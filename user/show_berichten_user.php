<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?> 
<?php include "../includes/connectdb.php"; ?>
<?php
session_start();

if ($_SESSION["login_user"] == true){
    $sql = "SELECT * FROM `bericht` ORDER BY `bericht`.`date/time` DESC"; 
    $sth = $db->prepare($sql); 
    $sth->execute(); 
  
    while($row = $sth->fetch()) { ?>
    <tr>
    <td><?php echo $row["date/time"]; ?></td>
    <br>
    <td><?php echo $row["Titel"]; ?></td>
    <br>
    <img src="../uplode_media/<?php echo $row["imglocation"]?>" alt="<?php echo $row["nameimg"]?>">
    <br>
    <td><?php echo $row["Bericht"]; ?></td>
    <br>
    <td><?php echo $row["Auteur"]; ?></td>
    </tr>
    <?php } ?> 
<?php }else echo "pleas login" ?>



<?php include "../includes/footer.php"; ?>