<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php session_start(); ?>
<?php if ($_SESSION['login_user'] == true){ ?>
<div class="container">
<form class="col-6" action="create-bericht.php" method="post" enctype="multipart/form-data">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
           <h2>wat is de auteur</h2>
           <input class="form-control" type="text" name="auteur" required>
           <br>
           <h2>wat is de title</h2>
           <input class="form-control" type="text" name="titel" required>
           <br>
           <h2>wat is het bericht</h2>
           <textarea class="form-control" type="text" name="bericht" rows="8" required></textarea>
           <h2>upload een foto</h2> 
           <div class="input-group mb-3">
           <input type="file"class="form-control" id="inputGroupFile02"  name="fileToUpload">
           </div>
           <br>
           <input class="btn btn-primary"; type="submit" name="submit" value="post">
         
</form>
</div>
<?php } else { echo"pleas login";} ?>
<?php include "../includes/footer.php"; ?>