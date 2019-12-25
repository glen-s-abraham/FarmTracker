<br>
<div class="container">
<h4>Add new Item</h4>
<br>
<form action="<?php echo base_url();?>index.php/home/add_livestock_cost_db" method="post">
  <div class="form-group">
    <input type="hidden" name="project_id" value="<?php echo $_SESSION['project_id']?>">
    <label for="item_name">Item category</label>
    <input type="text" class="form-control"  name="stock_cat" required>
  </div>
  <div class="form-group">
    <input type="hidden" name="project_id" value="<?php echo $_SESSION['project_id']?>">
    <label for="item_name">Item name</label>
    <input type="text" class="form-control"  name="stock_name" required>
  </div>
  <div class="form-group">
    <label for="item_qty">Item Quantity</label>
    <input type="number" min="1"  class="form-control"  name="stock_qty" required>
  </div>
  <div class="form-group">
    <label for="item_qty">Stock Add Date</label>
    <input type="date"   class="form-control"  name="stock_add_date" required>
  </div>
  <div class="form-group">
    <label for="item_cost">Item Harvest Weight(per item in KG)</label>
    <input type="text" class="form-control"  name="stock_harvest_weight" required>
  </div>
  <div class="form-group">
    <label for="item_cost">Item Harvest time</label>
    <input type="number" min="1" class="form-control"  name="stock_harvest_time" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>