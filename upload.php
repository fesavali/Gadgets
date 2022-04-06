<?php
include('conf.php');
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
// handle images
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {

// get input values
$brand = mysqli_real_escape_string($conf,htmlspecialchars($_POST['brand']));
$gadget = mysqli_real_escape_string($conf,htmlspecialchars($_POST['gadget']));
$ram= mysqli_real_escape_string($conf,htmlspecialchars($_POST['ram']));
$storage = mysqli_real_escape_string($conf,htmlspecialchars($_POST['storage']));
$price= mysqli_real_escape_string($conf,htmlspecialchars($_POST['price']));
$name= mysqli_real_escape_string($conf,htmlspecialchars($_POST['name']));
  // Save to database
$image = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));

$sql = "INSERT INTO posts(brand,type,ram,storage, price, image, added_by)
  VALUES('{$brand}','{$gadget}','{$ram}','{$storage}','{$price}','{$image}','{$name}')";

$post = mysqli_query($conf, $sql) or die("<b>Error:</b> Problem on occurred<br/>" . mysqli_error($conf));  

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file) && $post) {

    echo "Product uploaded successfully.";
    header("location:./index.php");
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>