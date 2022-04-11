<?php
include('conf.php');
$id = $_GET['id'];

if(isset($_POST["submit"])) {
// get input values
$product = $id;
$quantity= mysqli_real_escape_string($conf,htmlspecialchars($_POST['quantity']));
$name= mysqli_real_escape_string($conf,htmlspecialchars($_POST['name']));
$loc = mysqli_real_escape_string($conf,htmlspecialchars($_POST['location']));
$email = mysqli_real_escape_string($conf,htmlspecialchars($_POST['email']));
$phone = mysqli_real_escape_string($conf,htmlspecialchars($_POST['phone']));
$sql = "INSERT INTO orders(post_id,quantity,name,location,email,number)
  VALUES('{$product}', '{$quantity}', '{$name}','{$loc}','{$email}','{$phone}')";

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