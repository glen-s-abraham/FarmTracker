<br>
<div class="container">
<h4>Add new Item</h4>
<br>
<form action="<?php echo base_url();?>index.php/home/add_item_cost_db" method="post">
  <div class="form-group">
    <input type="hidden" name="project_id" value="<?php echo $_SESSION['project_id']?>">
    <label for="item_name">Item Name</label>
    <input type="text" class="form-control"  name="item_name" required>
  </div>
  <div class="form-group">
    <label for="item_qty">Item Quantity</label>
    <input type="number" min="1"  class="form-control"  name="item_qty" required>
  </div>
  <div class="form-group">
    <label for="item_cost">Item Cost</label>
    <input type="text" class="form-control"  name="item_cost" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>