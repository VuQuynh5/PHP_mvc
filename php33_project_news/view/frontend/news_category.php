      <h5 class="box-main-title">Tin kinh tế</h5>
      <div class="row"> 
      	<?php foreach($arr as $rows):?>
        <!-- news -->
        <div class="col-md-6 col-sm-12">
          <article class="news">
            <figure> <img class="img-thumbnail" src="public/upload/news/<?php echo $rows->c_img; ?>"> </figure>
            <div><a href="index.php?controller=news_detail&id=<?php echo $rows->pk_news_id;?>">
              <h5><?php echo $row->c_name;?></h5>
              </a></div>
            <p><?php echo $rows->c_description; ?> </p>
          </article>
        </div>
        <!-- end news --> 
    <?php endforeach; ?>
      </div>
      <!-- paging -->
      <ul class="pagination">
        <li class="page-item active"><a href="#" class="page-link">Trang</a></li>
        <?php foreach($i=1;$i<=$num_page;$i++): ?>
        <li class="page-item"><a href="index.php?controller=news_category&id=<?php echo $id;?>&p=<?php echo $i;?>" class="page-link"><?php echo $i;?></a></li>
        <? endforeach;?>
      </ul>
      <!-- end paging -->