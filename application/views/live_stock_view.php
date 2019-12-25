<div class="container">
<table class="table">
  <thead >
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Item Quantity</th>
      <th scope="col">Apprx.StockHarvest</th>
      <th scope="col">Apprx.StockWeightOnHarvest</th>
     </tr>
  </thead>
  <tbody>

<?php 

foreach ($data as $row ) {
  echo "<tr>";
  echo "<td>".$row['stock_name']."</td><td>".$row['stock_qty']."</td><td>".$row['stock_harvest_date']."</td><td>".$row['stock_qty']*$row['stock_harvest_weight']."</td>";
  echo"<td>";
  
  echo "<form class='form-inline' method='post' action='".base_url()."index.php/home/update_live_stock'>";
  echo "<input type='hidden' name='stock_id' value='".$row['stock_id']."''>";
  echo "<input type='number' min='1' class='form-control form-control-lg' name='stock_mortality' required 
  placeholder='Enter mortality'>";
  echo "<input type='hidden' name='stock_qty' value='".$row['stock_qty']."''>";
  echo "<button type='submit' class='btn btn-primary'>update</button>";
  echo "</form>";
  echo "</td>";
  echo "<td><a href='".base_url()."index.php/home/del_live_stock?id=".$row['stock_id']."' class='btn btn-danger'>X</a></td>";
  echo "</tr>";
  
}
?>

</tbody>
</table>
<br>
<a href='<?php echo base_url();?>index.php/home/add_livestock' class='btn btn-primary'>Add</a>
</div>