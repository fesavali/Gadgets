<?php
include('header.html'); 
include('conf.php');
$sql = "SELECT * FROM posts ORDER BY added_on DESC LIMIT 10";
$result = mysqli_query($conf,$sql);
?>
<h4>List All Available Gadgets</h4>
<p>Here are the specifications of the various gadgets like TV's, Laptops, Mobile Phones etc and the ratings of the gadgets. Here we provide the best deals to buy the various gadgets. </p>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  	<?php
  	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
	?>
	<div class="row" style="padding-top:10px;padding-bottom:10px;">
	<div class="col-md-4">
	<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="<?php echo "images/".$row["image"];?>" style="border-radius: 8px;" class="img-fluid" alt="product image" />
    <a href="details.php?id=<?php echo $row["id"];?>">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
    </a>
  </div>
	</div>
	<div class="col-md-8" style="background-color: rgba(0, 0, 0, 0.8); color:#fff;border-radius: 8px;">
	<table class="table" style="color:#fff;">
  <tbody>
    <tr>
      <th>Gadget Brand: &nbsp;&nbsp;<b><?php echo $row["brand"]; ?></b></th>
      <th>Gadget Type: &nbsp;&nbsp;<b><?php echo ucwords($row["type"]); ?></b></th>
    </tr>
    <tr>
      <th>Gadget Price: &nbsp;&nbsp;<b><span>&#36;</span>&nbsp;&nbsp;<?php echo number_format($row["price"], 2); ?></b></th>
      <th>Gadget RAM: &nbsp;&nbsp;<b><?php echo $row["ram"]; ?>&nbsp;&nbsp;GB</b></th>
    </tr>
    <tr>
      <th>Gadget Storage: &nbsp;&nbsp;<b><?php echo $row["storage"]; ?>&nbsp;&nbsp;GB</b></th>
      <td><a href="details.php?id=<?php echo $row["id"];?>" class="btn btn-primary">More Details</a></td>
    </tr>
  </tbody>
</table>
</div>
</div>
 <?php
   }
} else {
    echo "No Item posted yet"; 
}
mysqli_close($conf);
  ?>
  </div>
  <div class="col-md-2"></div>
</div>
<?php
include('footer.html'); 
?>