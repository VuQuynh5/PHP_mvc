<?php 
$id=isset($_GET["id"])?$_GET["id"]:0;
$record=$this->model->get_a_record("select * from tbl_news where pk_news_id=$id");
?>
<div class="row" style="margin-top: 20px;"> 
        <!-- news -->
        <div class="col-md-12 col-sm-12">
          <div><a href="#">
            <h5><?php echo $record->c_name;?></h5>
            </a></div>
          <article class="news">
            <figure> <img class="img-thumbnail text-center" src="public/upload/news/<?php $record->c_img; ?>"> </figure>
            <p>
            	<?php echo $record->c_description;?>
            	<?php echo $record->c_content;?>
          	</p>
          </article>
        </div>
        <!-- end news --> 
      </div>