<?php
include "../includes/connectdb.php";
$auteur = $_POST['auteur'];
$titel = $_POST['titel'];
$bericht = $_POST['bericht'];
//$image = $_POST['image'];

$target_dir = "C:/xampp/htdocs/hellowordsource/Social-Site/uplode_media/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
    die(not a image);
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
  die(file already exists);
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
  die(file too large);
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
    die(not a image);
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
echo "<br><br><br><br><br><br><br><br><br>";
echo ($_FILES["fileToUpload"]["name"]);
$name_img = ($_FILES["fileToUpload"]["name"]);
echo "<br><br><br><br><br><br><br><br><br>";
echo $name_img;
//
// $sql = "INSERT INTO klas(auteur, titel, bericht)VALUES (:auteur, :titel, :bericht)";
// $stmt = $db->prepare($sql);
// $stmt->execute([':auteur' => $auteur, ':titel' => $titel , ':bericht' => $bericht,]);
// echo "Data is toegevoegd";
// header("Location:../k");
// ?>