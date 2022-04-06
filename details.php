<?php
include('header.html'); 
include('conf.php');
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = '$id'";
$result = mysqli_query($conf,$sql);
?>
  <div class="row" style="padding-bottom:10px;padding-top: 10px;">
  <div class="col-md-3"></div>
  <div class="col-md-6" style="color:#000;">
  	<?php
  	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	?>
  	<div class="card">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="<?php echo "images/".$row["image"];?>" class="img-fluid"/>
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
  <div class="card-body">
    <h5 class="card-title">Gadget Brand: &nbsp;&nbsp;<b><?php echo $row["brand"]; ?></b></h5>
    <h5 class="card-title">Gadget Type: &nbsp;&nbsp;<b><?php echo ucwords($row["type"]); ?></b></h5>
    <h5 class="card-title">Gadget Price: &nbsp;&nbsp;<b><span>&#36;</span>&nbsp;&nbsp;<?php echo number_format($row["price"], 2); ?></b></h5>
    <h5 class="card-title">Gadget RAM: &nbsp;&nbsp;<b><?php echo $row["ram"]; ?>&nbsp;&nbsp;GB</b></h5>
    <h5 class="card-title">Gadget Storage: &nbsp;&nbsp;<b><?php echo $row["storage"]; ?>&nbsp;&nbsp;GB</b></h5>
    <p class="card-text">One of the Best Deals!</p>
  </div>
  <div class="card-footer text-muted">Gadget Added On:<b><?php echo $row["added_on"]; ?></b></div>
</div>

 <?php
   }
} else {
    echo "No Item posted yet"; 
}
mysqli_close($conf);
  ?>
  </div>
  <div class="col-md-3"></div>
</div>
<?php
include('footer.html'); 
?>