<div class="container">
<table class="table">
  <thead >
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Reminder</th>
      </tr>
  </thead>
  <tbody>
<?php 
$total_cost=0;
foreach ($data as $row ) {
	echo "<tr>";
	echo "<td>".$row['rem_date']."</td><td>".$row['reminder_to']."</td><td>";
	echo "<td><a href='".base_url()."index.php/home/del_reminder?id=".$row['rem_id']."' class='btn btn-danger'>X</a></td>";
	echo "</tr>";
  
}
?>
</tbody>
</table>
<br>
<form class="form-inline" method="post" action="<?php echo base_url();?>index.php/Home/add_reminder">
 <div class="form-group">
    <label for="project_name" class="sr-only">Remember To</label>
   
    <input type="text" class="form-control form-control-lg" name="reminder_to" required placeholder="Remember to">
  </div>
  <div class="form-group">

    <label for="project_name" class="sr-only">Date</label>
    
    <input type="Date" class="form-control form-control-lg" name="rem_date" required>
  </div>
 


  <button type="submit" class="btn btn-primary ">Add</button>

</form>
</div>