<?php
include('header.html'); 
include('conf.php');
$sql = "SELECT * FROM posts ORDER BY added_on DESC LIMIT 2";
$result = mysqli_query($conf,$sql);
?>
	<h4>Get Gadget Reviews, Rating and Deals</h4>
 
<div class="row"style="padding-left: 10px;padding-right: 10px;">
  <div class="col-md-3" style="padding-left: 10px;padding-right: 10px;background-color: rgba(255,255,255); border-radius:8px; padding-top: 10px; padding-bottom: 20px; color: #000;">
  	<span class="badge bg-info" style="width: 100%; padding-top:10px;padding-bottom:10px; background-color: lightblue; !Important;">SEARCH FOR GADGETS</span>
  	<form action="search.php" method="POST">
  <!-- Email input -->
   <div class="col-12">
  <label>Select Brand</label>
 <select class="" name="brand" data-select2-id="14" tabindex="-1" aria-hidden="true" 
 style="width: 100%; background-color: rgba(0,0,0, 0.8); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;" required>
<option disabled="disabled">Select Brand</option>
	<option value="Dell">Dell</option>
	<option value="Lenovo">Lenovo</option>
	<option value="HP">HP</option>
	<option value="Acer">Acer</option>
	<option value="Mac">Mac</option>
	<option value="Samsung">Samsung</option>
	<option value="MSI">MSI</option> 
	<option value="Nokia">Nokia</option>
	<option value="iPhone">iPhone</option>
    <option value="Oppo">Oppo</option>
    <option value="Vivo">vivo</option>
   	<option value="blackberry">Blackberry</option>
   	<option value="Oneplus">Oneplus</option>
   	<option value="other">Other</option>      			  			
</select>
  </div>
   <div class="col-12">
  <label>Select Gadget Type</label>
 <select class="" name="gadget" data-select2-id="14" tabindex="-1" aria-hidden="true" 
 style="width: 100%; background-color: rgba(0,0,0, 0.8); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;" required>
<option disabled="disabled">Select Gadget</option>
	<option value="phone">Phone</option>
	<option value="tv">TV</option>
	<option value="laptop">Laptop</option>
	<option value="both">Phone & Laptop</option>
	<option value="other">Other</option>     			  			
</select>
  </div>
 <div class="row">
  <div class="col-6">
    <label>Ram</label>
<select class="" name="ram" data-select2-id="14" tabindex="-1" aria-hidden="true" 
 style="width: 100%; background-color: rgba(0,0,0, 0.8); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;" required>
<option disabled="disabled">Select Ram Size</option>
	<option value="1">1 GB</option>
	<option value="2">2 GB</option> 
	<option value="3">3 GB</option>
	<option value="4">4 GB</option> 
	<option value="8">8 GB</option>
	<option value="16">16 GB</option> 
	<option value="32">32 GB</option>
	<option value="other">Other</option>      			  			
</select>
</div>
  <div class="col-6">
    <label>Storage</label>
<select class="" name="storage" data-select2-id="14" tabindex="-1" aria-hidden="true" 
 style="width: 100%; background-color: rgba(0,0,0, 0.8); color: #fff; border-radius:8px;padding-top:10px;padding-bottom:10px;" required>
<option disabled="disabled">Select Storage Size</option>
	<option value="4">4 GB</option>
	<option value="8">8 GB</option>
	<option value="16">16 GB</option> 
	<option value="30">30 GB</option>
	<option value="64">64 GB</option> 
	<option value="128">128 GB</option>
	<option value="256">256 GB</option> 
	<option value="512">512 GB</option>   
	<option value="1">1 TB</option> 
	<option value="other">Other</option> 			  			
</select>
  </div>
</div>
<div class="row" style="padding-bottom: 10px;">
  <div class="col-6">
    <label>Min Price</label>
<span>&#36;</span><input class="form-control" type="number" name="min_price" placeholder="Min Price in $" required></div>
  <div class="col-6">
<label>Max Price</label>
<span>&#36;</span><input class="form-control" type="number" name="max_price" placeholder="Max Price in $" required></input></div>
</div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block" name="submit">Search Gadget</button>
</form>
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
  	<p>Here are the specifications of the various gadgets like TV's, Laptops, Mobile Phones etc and the ratings of the gadgets. Here we provide the best deals to buy the various gadgets. </p>
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
	