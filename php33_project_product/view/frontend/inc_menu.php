<nav class="navbar navbar-expand-md navbar-dark bg-info">
  <div class="container"> <a class="navbar-brand" href="index.html">Simple Ecommerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
      <ul class="navbar-nav m-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item active"> <a class="nav-link" href="index.php?controller=cart">Cart</a> </li>
        <li class="nav-item active"> <a class="nav-link" href="contact.html">Contact</a> </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <div class="input-group input-group-sm">
          <input type="text" class="form-control" placeholder="Search...">
          <div class="input-group-append">
            <button type="button" class="btn btn-secondary btn-number"> <i class="fa fa-search"></i> </button>
          </div>
        </div>
        <a class="btn btn-success btn-sm ml-3" href="index.php?controller=cart"> <i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-light">
          <?php $n=0;
            if(isset($_SESSION["cart"])){
            foreach($_SESSION["cart"] as $rows):
              $n++;
            endforeach;
            echo $n;}
            else
            echo $n;
          ?>
        </span> </a>
      </form>
    </div>
  </div>
</nav>