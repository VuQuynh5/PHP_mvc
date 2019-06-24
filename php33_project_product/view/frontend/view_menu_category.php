<div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
      <ul class="list-group category_block">
      	<?php 
      		//lay cac ban ghi trong table_category_product
      		$category= $this->model->get_all("select * from tbl_category_product order by pk_category_product_id desc");
      		foreach ($category as $rows):
      	?>
        <li class="list-group-item"><a href="index.php?controller=product_category&id=<?php echo $rows->pk_category_product_id;?>"><?php  echo $rows->c_name; ?></a></li>
			<?php endforeach; ?>
      </ul>