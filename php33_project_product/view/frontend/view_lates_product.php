<!-- lates product -->
<div class="container mt-3">
  <div class="row">
    <div class="col-sm">
      <div class="card">
        <div class="card-header bg-primary text-white text-uppercase"> <i class="fa fa-star"></i> Sản phẩm mới nhất </div>
        <div class="card-body">
          <div class="row"> 
            <?php  
            //lay cac san pham moi nhat: order by theo pk_product_id lon  nhat -> lay sp co il lon nhat
            $product=$this->model->get_all("select * from tbl_product order by pk_product_id desc limit 0,4");
            foreach($product as $rows):
            ?>
            <!-- list product -->
            <div class="col-sm">
              <div class="card"> <img class="card-img-top" src="public/upload/product/<?php echo $rows->c_img; ?>" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title"><a href="index.php?controller=product_detail$id=<?php echo $rows->pk_product_id; ?>" title="<?php echo $rows->c_name; ?>"><?php echo $rows->c_name; ?></a></h4>
                  <div style=""><p class="card-text text-justify"><?php echo substr($rows->c_description,0,200); ?></p></div>
                  <div class="row">
                    <div class="col">
                      <p class="btn btn-danger btn-block"><?php echo number_format($rows->c_price) ; ?></p>
                    </div>
                    <div class="col"> <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id; ?>" class="btn btn-success btn-block">Add to cart</a> </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end list product --> 
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end lates product --> 