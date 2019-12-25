<div class="container">
<table class="table">
  <thead >
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Item Quantity</th>
      <th scope="col">Total Cost</th>
     </tr>
  </thead>
  <tbody>
<?php 
$total_cost=0;
foreach ($data as $row ) {
	echo "<tr>";
	echo "<td>".$row['item_name']."</td><td>".$row['item_qty']."</td><td>".$row['item_tot_cost']."</td>";
	echo "<td><a href='".base_url()."index.php/home/del_item_cost?id=".$row['item_id']."' class='btn btn-danger'>X</a></td>";
	echo "</tr>";
  $total_cost+=$row['item_tot_cost'];
}
?>
<tr><td><b>Grand Total</b></td><td></td><td><b><?php echo $total_cost;?></b></td></tr>
</tbody>
</table>
<br>
<a href='<?php echo base_url();?>index.php/home/add_item_cost' class='btn btn-primary'>Add</a>
</div>
