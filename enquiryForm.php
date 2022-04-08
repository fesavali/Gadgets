<?php
include('header.html'); 
include('conf.php');
?>	
		
		<h1>Enquiry Form</h1>
		<p>Here is the form where you can search for the related Gadgets</p>

		<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
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
  <div class="col-md-3"></div>
</div>
</br>
<?php
include('footer.html'); 
?>