<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../includes/connectdb.php"; ?>
<?php session_start(); ?>
<?php if ($_SESSION['login_admin'] == true){ ?>
  <?php
  $id = $_POST['id'];
  $sql = "SELECT * FROM bericht WHERE id = :id";
  $sth = $db->prepare($sql);
  $sth->execute(['id' => $id]);
  while ($row = $sth->fetch()){
  ?>
<div class="container">
<form class="col-6" action="change-bericht.php" method="post" enctype="multipart/form-data">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>wat is de auteur</h2>
              <input value="<?php echo $row["Auteur"]; ?>" class="form-control" type="text" name="auteur" required>
            <br>
            <h2>wat is de title</h2>
              <input value="<?php echo $row["Titel"]; ?>"  class="form-control" type="text" name="titel" required>
            <br>
            <h2>wat is het bericht</h2>
              <textarea class="form-control" type="text" name="bericht" rows="8" required><?php echo $row["Bericht"] ?> </textarea>
            <br>
              <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">

              <input class="btn btn-primary" type="submit" name="submit" value="post">
</form>
</div>
<?php } ?>
<?php } else { echo"you are not admin";} ?>
<?php include "../includes/footer.php"; ?>