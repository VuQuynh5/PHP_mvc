<?php  
  foreach($arr as $rows):
?>
<!-- list product -->
        <div class="col-12 col-md-6 col-lg-4" style="margin-bottom: 20px;">
          <div class="card"> <img class="card-img-top" src="public/upload/product/<?php echo $rows->c_img; ?>" alt="<?php echo $rows->c_name; ?>">
            <div class="card-body">
              <h4 class="card-title"><a href="index.php?controller=product_detail&id=<?php echo $rows->pk_product_id?>" title="View Product"><?php echo $rows->c_name; ?></a></h4>
              <p class="card-text text-justify"><?php echo $rows->c_description; ?></p>
              <div class="row">
                <div class="col">
                  <p class="btn btn-danger btn-block"><?php echo number_format($rows->c_price); ?></p>
                </div>
                <div class="col"> <a href="index.php?controller=cart&act=add&id=<?php echo $rows->pk_product_id;?>" class="btn btn-success btn-block">Add to cart</a> </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end list product --> 
  <?php endforeach; ?>      
        <div class="col-12">
          <nav aria-label="...">
            <ul class="pagination">
              <li class="page-item disabled"> <a class="page-link" href="#" tabindex="-1">Previous</a> </li>
              <?php for($i=1; $i<=$num_page; $i++): ?>
                <li class="page-item "> <a class="page-link" href="index.php?controller=product-category&id=<?php echo $id; ?>&p=<?php echo $i;?>" tabindex="-1"><?php echo $i; ?></a> </li>
              <?php endfor;?>
            </ul>
          </nav>
        </div>
      </div>
    </div>