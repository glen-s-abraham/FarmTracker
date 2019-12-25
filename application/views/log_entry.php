<div class="container">
<table class="table">
  <thead >
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Observations</th>
      </tr>
  </thead>
  <tbody>
<?php 
$total_cost=0;
foreach ($data as $row ) {
	echo "<tr>";
	echo "<td>".$row['log_date']."</td><td>".$row['log_descreption']."</td><td>";
	echo "<td><a href='".base_url()."index.php/home/del_log?id=".$row['log_id']."' class='btn btn-danger'>X</a></td>";
	echo "</tr>";
  
}
?>
</tbody>
</table>
<br>
<form class="form-inline" method="post" action="<?php echo base_url();?>index.php/Home/add_log">
 <div class="form-group">
    <label for="project_name" class="sr-only">Log</label>
   
    <input type="text" class="form-control form-control-lg" name="log_descreption" required placeholder="Enter Log">
  </div>
  <div class="form-group">

    <label for="project_name" class="sr-only">Date</label>
    
    <input type="Date" class="form-control form-control-lg" name="log_date" required>
  </div>
 


  <button type="submit" class="btn btn-primary ">Add</button>

</form>
</div>