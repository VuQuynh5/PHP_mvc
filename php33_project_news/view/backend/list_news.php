<div class="col-md-11 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="admin.php?controller=add_edit_news&act=add" class="btn btn-primary">Add</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">News</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<tr>
					<th style="width:50px;">STT</th>
					<th style="width:100px;">Ảnh</th>
					<th>Tiêu đề</th>
					<th style="width:150px;">Thuộc danh mục</th>
					<th style="width:70px;">Hot</th>
					<th style="width:100px;">Chuc nang</th>
				</tr>
				<?php  $stt=0;?>
				<?php foreach($arr as $rows):?>
					<?php $stt++; ?>
				<tr>
					<td style="text-align:center;"><?php echo $stt;?></td>
					<td style="text-align:center;">
						<!--<img src="public/upload/news/<?php echo $rows->c_img;?>" style="width:50px;height:50px;" alt="">-->
						<?php if( $rows->c_img != "" && file_exists("public/upload/news/".$rows->c_img)): ?>
							<img src="public/upload/news/<?php echo $rows->c_img?>" style="width:100px; height:50px;" alt="">
						<?php endif;?>
					</td>
					<td><?php echo $rows->c_name;?></td>
					<td style="text-align:center;">
						<?php $category = $this->model->get_a_record("select c_name from tbl_category_news where pk_category_news_id=".$rows->fk_category_news_id); echo isset($category->c_name)?$category->c_name:''; ?>
					</td>
					<td style="text-align:center;">
						<?php if($rows->c_hotnews==1): ?>
							<span class="glyphicon glyphicon-check"> </span>
						<?php endif;?>
					</td>
					<td style="text-align:center;">
						<a href="admin.php?controller=add_edit_news&act=edit&p=<?php echo ($p+1); ?>&id=<?php echo $rows->pk_news_id; ?>">Edit</a>&nbsp;
						<a href="admin.php?controller=add_edit_news&act=delete&id=<?php echo $rows->pk_news_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>

			<style type="text/css">
				.pagination{padding:0px; margin:0px;}			
			</style>

			<ul class="pagination pull-right">
				<li class="disable"><a href="" title="">Trang</a> </li>
				<?php for ($i=1;$i<= $num_page; $i++):?>
					<li><a href="admin.php?controller=news&p=<?php echo $i; ?>" title=""><?php echo $i; ?></a></li>
				<?php endfor; ?>
			</ul>

			paging
		</div>
	</div>
</div>