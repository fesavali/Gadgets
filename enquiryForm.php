<?php
include('header.html'); 
?>	
		
		<h1>Enquiry Form</h1>
		<p>Here is the form where you can search for the related Gadgets</p>
		
		<input type="radio" id = "fname" name = "fname" value = "Laptops">
		<label for = "fname">Laptops</label>
		<input type="radio" id = "fname" name = "fname" value = "Mobiles">
		<label for = "fname">Mobile</label><br><br>
			<label for="laptops">Laptop Brand:</label>
			<select id="laptops" name="laptops">
    			<option value="Laptops">Select</option>
    			<option value="Dell">Dell</option>
    			<option value="Lenova">Lenova</option>
    			<option value="HP">HP</option>
   				<option value="Acer">Acer</option>
   				<option value="Mac">Mac</option>
   				<option value="MSI">MSI</option>
  			</select>
  			<br>
  			<br>
  			<label for="mobile">Mobile Brand:</label>
			<select id="mobile" name="mobile">
    			<option value="Phones">Select Option</option>
    			<option value="iPhone">iPhone</option>
    			<option value="Oppo">Oppo</option>
    			<option value="Vivo">vivo</option>
   				<option value="blackberry">Blackberry</option>
   				<option value="Oneplus">Oneplus</option>
  			</select><br><br>
  			<label for="name">RAM:</label>
  			<input type="text" id="fname" name="fname" value=""><br><br>
  			<label for="name">Hard Disk:</label>
  			<input type="text" id="fname" name="fname" value=""><br>
  			<br><br>
  			<input type="Submit" value="Get Details">

   
   </form>
<?php
include('footer.html'); 
?>