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
        <div class="textbox">
            <td><?php echo $row["Bericht"]; ?></td>
        </div>
    <br>
    <td><?php echo $row["Auteur"]; ?></td>
    </div>

    <audio id = 'myAudio<?php echo $row["id"] ?>' >
                <source src="/hellowordsource/Social-Site/media/audio/button.mp3" type="audio/mpeg">
            </audio>
            <button style="display: inline-block;" id = 'likebutton<?php echo $row["id"] ?>' type="button" onclick="like(<?php echo $row["id"] ?>)"  class="btn btn-danger">Like</button>
            <button style="display: none;" id = 'unlikebutton<?php echo $row["id"] ?>' type="button" onclick="unlike(<?php echo $row["id"] ?>)"  class="btn btn-danger">Unlike</button>
            <br>
            <td> likes: <div id = 'likes<?php echo $row["id"] ?>'> <?php echo $row["likes"]; ?> </div> </td>


    <form method="post" action="../exstra/dell.php">
    <input type="hidden" name="imglocation" value="<?php echo $row["imglocation"]; ?>">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <input type="submit" name="delete" value="delete" class="btn btn-danger">
    </form>
    <form method="post" action="../create-bericht/change-bericht-form.php">
    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
    <input type="submit" class="btn btn-info" name="change" value="change" class="btn btn-danger">
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
            <form method="post" action="../create-bericht/makecomment.php">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <textarea class="form-control" type="text" name="comment" rows="3" required></textarea>
            <br>
            <input type="submit" name="coment" value="coment" class="btn btn-primary">
            </form>
            <br>
            <br>
    </div>
    </div>
    <?php } ?> 
<?php }else echo "you are not allowed to access" ?>



<?php include "../includes/footer.php"; ?>