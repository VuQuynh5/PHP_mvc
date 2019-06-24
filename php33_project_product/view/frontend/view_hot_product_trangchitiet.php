<div class="card bg-light mb-3">
  <div class="card-header bg-success text-white text-uppercase">Hot product</div>
  <div class="card-body"> 
    <?php 
     $product=$this->model->get_all("select * from tbl_product where c_hotproduct=1 order by pk_product_id desc limit 0,2");
            foreach($product as $rows):
    ?>
    <!-- list hot product -->
    <div> <img class="card-img-top"  <img src="public/upload/product/<?php echo $rows->c_img; ?>" alt="Card image cap">
      <h5 class="card-title" style="margin-top: 5px;"><?php echo $rows->c_name; ?></h5>
      <p class="card-text text-justify"><?php echo substr($rows->c_description,0,200); ?></p>
      <div style="border:1px dashed #dddddd; border-bottom-width: 0px; margin-bottom: 10px;"></div>
    </div>
    <!-- end list hot product --> 
   <?php endforeach; ?>
  </div>
</div>