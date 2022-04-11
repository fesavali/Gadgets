<?php
include('header.html'); 
include('conf.php');

$sql1 = "SELECT * FROM orders ORDER BY id DESC LIMIT 10";

$result1 = mysqli_query($conf,$sql1);
?>
		
<h4>List Of Orders</h4>
<table class="table" style="color:#fff;">
  <thead>
    <tr>
      <th scope="col">Order Number</th>
      <th scope="col">Product</th>
      <th scope="col">Quantity</th>
      <th scope="col">Ordered By</th>
      <th scope="col">Deliver Location</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Order Time</th>
    </tr>
  </thead>
  <tbody>
  <?php
  	if (mysqli_num_rows($result1) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result1)) {
	?>
    <tr>
      <th scope="row"><?php echo $row1["id"];?></th>
      <?php
      $id = $row1["post_id"];
      $sql = "SELECT * FROM posts WHERE id = '$id'";
      $result = mysqli_query($conf,$sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        ?>
      <td><?php echo $row["brand"].",".$row["type"].",$".$row["price"];?></td>
      <?php
        }
        } else {
        echo "No Reviews posted yet."; 
        }
      ?>
      <td><?php echo $row1["quantity"];?></td>
      <td><?php echo $row1["name"];?></td>
      <th><?php echo $row1["location"];?></th>
      <td><?php echo $row1["email"];?></td>
      <td><?php echo $row1["number"];?></td>
      <td><?php echo $row1["order_time"];?></td>
    </tr>
    <?php
}
} else {
    echo "No Reviews posted yet."; 
}
mysqli_close($conf);
  ?>
  </tbody>
</table>


<?php
include('footer.html'); 
?>