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
    <div class="row justify-content-center">
    <div class="jumbotron col-xl-6 bericht">
    <div class="">
    <tr>
    <div id="date">
    <td><?php echo $row["date/time"]; ?></td>
    </div>
    <br>
    <td><?php echo $row["Titel"]; ?></td>
    <br>
    <img src="../uplode_media/<?php echo $row["imglocation"]?>" alt="<?php echo $row["nameimg"]?>" width="75%">
    <br>
    <br>
    <div id="textbericht">
    <td><?php echo $row["Bericht"]; ?></td>
    <br>
    <br>
    <td><?php echo $row["Auteur"]; ?></td>
    </div>
    </tr>
    </div>
    </div>
    </div>
    <br>
    <br>
    <?php } ?> 
<?php }else echo "pleas login" ?>



<?php include "../includes/footer.php"; ?>