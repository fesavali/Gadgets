<?php
include('header.html'); 
include('conf.php');
$sql = "SELECT * FROM posts ORDER BY added_on DESC LIMIT 2";
$result = mysqli_query($conf,$sql);
?>
	<h4>Get Gadget Reviews, Rating and Deals</h4>
 
<div class="row"style="padding-left: 10px;padding-right: 10px;">
<div class="col-md-3" style="max-height:200px; background-color: black; border-radius: 8px;">
  	<p>Here are the specifications of the various gadgets like TV's, Laptops, Mobile Phones etc and the ratings of the gadgets. Here we provide the best deals to buy the various gadgets. </p>
  </div>
  <div class="col-md-9">
  	<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="sld1.jpg" class="d-block w-100" alt="Get Gadget Reviews, Rating and Deals." style="max-height: 400px;"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Gadgets | Guru</h5>
        <p>Get Gadget Reviews, Rating and Deals.</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="sld2.jpg" class="d-block w-100" alt="Variety on gadgets like TV's, Laptops, Mobile Phones" style="max-height: 400px;"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Gadgets | Guru</h5>
        <p>Variety on gadgets like TV's, Laptops, Mobile Phones</p>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="sld3.jpg" class="d-block w-100" alt="We provide the best deals to buy the various gadgets." style="max-height: 400px;"/>
      <div class="carousel-caption d-none d-md-block">
        <h5>Gadgets | Guru</h5>
        <p>We provide the best deals to buy the various gadgets.</p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
  </div>
</div>
<div class="row" style="padding-top:10px;padding-bottom:10px; padding-left: 10px; padding-right: 10px;">
  <div class="col-md-3" style="max-height:200px; background-color: black; border-radius: 8px;">
  	<!-- <p>Here are the specifications of the various gadgets like TV's, Laptops, Mobile Phones etc and the ratings of the gadgets. Here we provide the best deals to buy the various gadgets. </p> -->
  </div>
  <div class="col-md-9">
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
</div>
 <?php
include('footer.html'); 
?>
	