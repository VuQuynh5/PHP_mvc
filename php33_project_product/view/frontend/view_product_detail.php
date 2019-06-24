<?php 
$id=isset($_GET["id"])?$_GET["id"]:0;
$product=$this->model->get_a_record("select * from tbl_product where pk_product_id=$id");
?>

<!-- product detail -->
      <div class="row"> 
        <!-- Image -->
        <div class="col-12 col-lg-6">
          <div class="box-detail"><img class="img-fluid" src="public/upload/product/<?php echo $product->c_img?>"></div>
        </div>
        
        <!-- Add to cart -->
        <div class="col-12 col-lg-6 add_to_cart_block">
          <div class="card bg-light mb-3">
            <div class="card-body">
              <p class="price"><?php echo $product->c_price;?></p>
              
              <form method="get" action="#">
                <a href="index.php?controller=cart&act=add&id=<?php echo $product->pk_product_id; ?>" class="btn btn-success btn-lg btn-block text-uppercase"> <i class="fa fa-shopping-cart"></i> Add To Cart </a>
              </form>
              <div class="product_rassurance">
                <ul class="list-inline">
                  <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br/>
                    Fast delivery</li>
                  <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br/>
                    Secure payment</li>
                  <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br/>
                    +33 1 22 54 65 60</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row"> 
        <!-- Description -->
        <div class="col-12">
          <div class="card border-light mb-3">
            <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-align-justify"></i> Description</div>
            <div class="card-body">
              <p class="card-text text-justify"> <?php echo $product->c_description;?> <?php echo $product->c_content;?> </p>
            </div>
          </div>
        </div>
        <!-- end Description --> 
      </div>
      <!-- end product detail --> 