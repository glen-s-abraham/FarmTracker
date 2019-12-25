<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FarmTracker</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link  rel="stylesheet" href="<?php echo base_url();?>Assets/css/bootstrap.css" >
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="navbar-brand" href="#">
     <img src="<?php echo base_url()?>Assets/img/logo.jpg" width="35" height="30" class="d-inline-block align-top" alt="">
  
  <a  class="navbar-brand" href="<?php echo base_url();?>index.php/home/landing" style="padding-right: 750px">FarmTracker</a>
</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/home/landing">Home</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Home/cost_entry">Cost<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/home/live_stock">Live Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/home/reminder">ToDo</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/home/logs">Logs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>index.php/Home/logout">Log Out</a>
      </li>
    </ul>
    
</nav>
<script src="<?php echo base_url();?>Assets/scripts/jquery-3.3.1.slim.min.js"></script>	
<script src="<?php echo base_url();?>Assets/scripts/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>Assets/scripts/popper.min.js"></script>

