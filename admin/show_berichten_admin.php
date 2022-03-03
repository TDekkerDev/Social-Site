<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?> 
<?php include "../includes/connectdb.php"; ?>
<?php
session_start();

if ($_SESSION["login_admin"] == true){
    $sql = "SELECT * FROM `bericht` ORDER BY `bericht`.`date/time` DESC"; 
    $sth = $db->prepare($sql); 
    $sth->execute(); 
  
    while($row = $sth->fetch()) { ?>
    <br>
    <div class="row justify-content-center">
    <div class="jumbotron col-xl-4 bericht">
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
    <td><?php echo $row["Auteur"]; ?></td>
    </div>
    </tr>
    <form method="post" action="../exstra/dell.php">
    <input type="hidden" name="imglocation" value="<?php echo $row["imglocation"]; ?>">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <input type="submit" name="delete" value="delete" class="btn btn-danger">
    </form>
    </div>
    </div>
    </div>
    <br>
    <br>
    <?php } ?> 
<?php }else echo "you are not allowed to access" ?>



<?php include "../includes/footer.php"; ?>