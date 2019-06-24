<!DOCTYPE html>
<html lang="fr">
<head>
<!-- Site meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ecommerce</title>
<!-- CSS -->
<link href="public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="public/frontend/css/fontawesome-all.min.css">
<link href="public/frontend/css/css.css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
<link href="public/frontend/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include "view/frontend/inc_menu.php"; ?>
<div class="container" style="margin-top: 15px;">
  <div class="row"> 
    <!-- category -->
    <div class="col-12 col-md-3">
      <?php include "controller/frontend/controller_menu_category.php"; ?>
    </div>
    <!-- end category --> 
    <!-- slide -->
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="public/frontend/images/chicago.jpg" alt="First slide"> </div> 
          <div class="carousel-item"> <img class="d-block w-100" src="public/frontend/images/la.jpg" alt="Second slide"> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="public/frontend/images/ny.jpg" alt="Third slide"> </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
    <!-- end slide --> 
  </div>
</div>

<?php  include "controller/frontend/controller_lates_product.php";?>
<?php  include "controller/frontend/controller_hot_product.php";?>

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

<!-- JS --> 
<script src="public/frontend/js/jquery-3.2.1.slim.min.js" type="text/javascript"></script> 
<script src="public/frontend/js/popper.min.js" type="text/javascript"></script> 
<script src="public/frontend/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
