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
            <div class="textbox">
            <td><?php echo $row["Bericht"]; ?></td>
            </div>
        <br>
        <td><?php echo $row["Auteur"]; ?></td>
        </div>
            <form method="post" action="../exstra/like.php">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="submit" name="like" value="like" class="btn btn-danger">
            </form>
            <td> likes: <?php echo $row["likes"]; ?></td>
            <form method="post" action="../exstra/unlike.php">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <input type="submit" name="like" value="unlike" class="btn btn-danger">
            </form>
            <h1>Comments:</h1>
                            <div>
                                <?php
                                $sql2 = "SELECT * FROM bericht b JOIN comment c ON (c.post_id = b.id) WHERE c.post_id = b.id AND b.id = :id";
                                $sth2 = $db->prepare($sql2); 
                                $sth2->execute(['id' => $row["id"]]);
                                while($com = $sth2->fetch()){ ?>
                                    <div class="comment">
                                        <td><?php echo $com["comment"]; echo "<br>"?> </td>
                                    </div>
                                <?php } ?>
                            
                            </div>
            </div>
            <br>
            <br>
            <form method="post" action="../create-bericht/makecomment.php">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <textarea class="form-control" type="text" name="comment" rows="3" required></textarea>
            <br>
            <input type="submit" name="coment" value="coment" class="btn btn-primary">
            </form>
            <br>
            <br>
            </div>
    </tr>
    </div>
    </div>
    </div>
    <br>
    <br>
    <?php } ?> 
<?php } else echo "please login" ?>



<?php include "../includes/footer.php"; ?>