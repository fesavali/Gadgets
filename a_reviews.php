<?php
include('header.html'); 
include('conf.php');
$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id = '$id'";
$sql1 = "SELECT * FROM reviews WHERE post_id = '$id' ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conf,$sql);
$result1 = mysqli_query($conf,$sql1);
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
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light" style="padding-left: 120px;">
    <img src="<?php echo "images/".$row["image"];?>" class="img-fluid" style="height:230px;"/>
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
    <h5 class="card-title">Reviews:</h5>
    <?php
  	if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
	?>
    <p class="card-text"><?php echo "<b>".$row1["name"]."</b>"." :".$row1["cemment"]; ?></p>
    <?php
  }
} else {
    echo "No Reviews posted yet"; 
}
mysqli_close($conf);
  ?>
  </div>
  <div class="card-footer text-muted">Gadget Added On:<b><?php echo $row["added_on"]; ?></b></div>
</div>

  <br/>
  <form action="post_cmd.php?id=<?php echo $row["id"];?>" method="post">
  <div class="row" style="background-color: white; paddind-top:20px; border-radius:8px;">
  <div class="form-outline">
  <textarea class="form-control" id="textAreaExample" name="comment" rows="2" required></textarea>
  <label class="form-label" for="textAreaExample">Add Review</label>
</div>
</div>
<div class="col-12">
    <label>Added By</label>
<input class="form-control" type="text" name="name" placeholder="Added By" required></div>
</br>
<button type="submit" class="btn btn-primary btn-block" name="submit">Post Review</button>
</form>
  </div>
  <?php
   }
} else {
    echo "No Item posted yet"; 
}

  ?>

  <div class="col-md-3"></div>
</div>
<?php
include('footer.html'); 
?>