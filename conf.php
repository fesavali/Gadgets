<?php
$servername = "localhost";
$myusername = "root";
$mypassword = "";
$db = "gadgets";

// Create connection
$conf = mysqli_connect($servername,$myusername,$mypassword,$db);
// Check connection
if (!$conf) {
    die("Connection failed: " . mysqli_connect_error());
}
?>