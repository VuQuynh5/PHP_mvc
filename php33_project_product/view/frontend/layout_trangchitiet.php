<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
<title>Ecommerce</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="public/frontend/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script>
<script src="public/frontend/js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="public/frontend/css/fontawesome-all.min.css">
<link href="public/frontend/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include "view/frontend/inc_menu.php"; ?>
<div class="container" style="margin-top: 15px;"> 
  <!-- main -->
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Cras justo odio</li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-sm-3">
      <div class="card bg-light mb-3">
        <?php include "controller/frontend/controller_menu_category.php";?>
      </div>
      <?php include"controller/frontend/controller_hot_product_trangchitiet.php";?>
    </div>
    <div class="col">
      <div class="row"> 
        <?php  if(file_exists($file_controller))
                include $file_controller;
        ?>
  </div>
  <!-- end main --> 
</div>

<!-- Footer -->
<footer class="text-light">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-lg-4 col-xl-3">
        <h5>About</h5>
        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
        <p class="mb-0"> Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. </p>
      </div>
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
        <h5>Informations</h5>
        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
        <ul class="list-unstyled">
          <li><a href="">Link 1</a></li>
          <li><a href="">Link 2</a></li>
          <li><a href="">Link 3</a></li>
          <li><a href="">Link 4</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
        <h5>Others links</h5>
        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
        <ul class="list-unstyled">
          <li><a href="">Link 1</a></li>
          <li><a href="">Link 2</a></li>
          <li><a href="">Link 3</a></li>
          <li><a href="">Link 4</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3">
        <h5>Contact</h5>
        <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
        <ul class="list-unstyled">
          <li><i class="fa fa-home mr-2"></i> My company</li>
          <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
          <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
          <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
        </ul>
      </div>
      <div class="col-12 copyright mt-3">
        <p class="float-left"> <a href="#">Back to top</a> </p>
        <p class="text-right text-muted">Devpro</p>
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript">

</script>
</body>
</h