<?php
include('conf.php');
$id = $_GET['id'];

if(isset($_POST["submit"])) {
// get input values
$comment = mysqli_real_escape_string($conf,htmlspecialchars($_POST['comment']));
$product = $id;
$name= mysqli_real_escape_string($conf,htmlspecialchars($_POST['name']));

$sql = "INSERT INTO reviews(post_id,cemment,name)
  VALUES('{$product}','{$comment}','{$name}')";

$post = mysqli_query($conf, $sql) or die("<b>Error:</b> Problem on occurred<br/>" . mysqli_error($conf));  

if ($post) {

    echo "Comment uploaded successfully.";
    header("location:./index.php");
    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your comment.";
  }
}

?>