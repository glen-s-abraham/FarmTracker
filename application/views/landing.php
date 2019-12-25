<html>
    <head>
      <meta charset="utf-8">
         <meta name="viewport" content="width=device-width; initial-scale=1.0;">
        <link rel="stylesheet" href="<?php echo base_url()?>Assets/css/bootstrap.css">
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="navbar-brand" href="#">
     <img src="<?php echo base_url()?>Assets/img/logo.jpg" width="35" height="30" class="d-inline-block align-top" alt="">
  
  <a  class="navbar-brand" href="<?php echo base_url();?>index.php/home/landing" style="padding-right: 1000px">FarmTracker</a>
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Home/logout">Log Out</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
<table class="table">
  <thead >
    <tr>
      <th scope="col">Project</th>
       </tr>
  </thead>
  <tbody>
  <?php
    foreach ($data as $row) {
      echo "<tr><td><a href='".base_url()."index.php/home/dash_board?id=".$row['project_id']."'>".$row['project_name']."</td><td><a href='".base_url()."index.php/home/del_project?id=".$row['project_id']."' class='btn btn-danger'>X</a></td></tr>";
    }
  ?>
</tbody>
</table>

<br>
<form class="form-inline" method="post" action="<?php echo base_url();?>index.php/Home/add_project">
  <div class="form-group">
    <label for="project_name" class="sr-only">Project name</label>
    <tr>
    <input type="text" class="form-control form-control-lg" name="project_name" required placeholder="Project name">
  </div>
</tr>
<tr>
  <button type="submit" class="btn btn-primary ">Add</button>
</tr>
</form>
</div>
