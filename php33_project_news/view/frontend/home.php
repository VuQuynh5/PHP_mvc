<?php
	//kiet ke cac danh muc co bai tin o ben trong
	$category=$this->model->get_all("select * from tbl_category_news where pk_category_news_id in (select fk_category_news_id from tbl_news where tbl_category_news.pk_category_news_id=tbl_news.fk_category_news_id) order by pk_category_news_id desc ");
	foreach ($category as $rows_category): 
?>      
      <!-- list category -->
      <h5 class="box-main-title"><?php echo $rows_category->c_name; ?></h5>
      <div class="row"> 
      	<?php 
//lay tin du tien, moi nhat
      	$first_news=$this->model->get_a_record("select * from tbl_news where fk_category_news_id={$rows_category->pk_category_news_id} order by pk_news_id desc limit 0,1");
      	?>
        <!-- news -->
        <div class="col-md-6 col-sm-12">
          <article class="news">
            <figure> <img class="img-thumbnail" src="public/upload/news/<?php echo $first_news->c_img;?> ">
              <figcaption><a href="index.php>controller=news_detail&id=<?php echo $first_news->pk_news_id;?>">
                <h6>Duis tellus risus, convallis ac mi in, varius pharetra lacus</h6>
                </a> </figcaption>
            </figure>
            <p>Duis tellus risus, convallis ac mi in, varius pharetra lacus. Nunc bibendum vel urna at fringilla. Morbi varius, urna vel varius posuere, libero velit ultricies dui, nec convallis urna turpis et metus. </p>
          </article>
        </div>
        <!-- end news --> 
        <!-- news -->
        <div class="col-md-6 col-sm-12"> 
      	<?php 
		$news=$this->model->get_all("select * from tbl_news where fk_category_news_id={$rows_category->pk_category_news_id} order by pk_news_id desc limit 1,4");
		foreach($news as $rows);
		?> 
          <!-- other news -->
          <article class="news">
            <div class="row">
              <div class="col-md-4"><img class="img-thumbnail" src="public/upload/news/<?php echo $rows->c_img; ?>"></div>
              <div class="col-md-8 no-padding"><a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id; ?>"><?php echo $rows->c_name; ?></a></div>
            </div>
            <div class="dotted"></div>
          </article>
          <!-- end other news --> 
        </div>
        <!-- end news --> 
      </div>
      <!-- end list category --> 
  <?php endforeach; ?>
