<div class="col-md-6 col-xs-offset-3">
	

	<div style="margin-bottom:5px;">
		<a href="admin.php?controller=add_edit_category_news&act=add" class="btn btn-primary">Add Category news</a>
	</div>

	<?php if( isset($_GET["err"])&&$_GET["err"]=="error"):  ?>
		<div class="alert alert-danger">Category is been exit</div>
	<?php endif; ?>

	<div class="panel panel-primary">
		<div class="panel-heading">Category news</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Tên danh mục</th>
					<th style="width:100px;">Quản lý</th>
				</tr>
				<?php foreach($rows as $record):?>
				<tr>
					<td><?php echo $record->c_name; ?></td>
					<td style="text-align:center">
						<a href="admin.php?controller=add_edit_category_news&act=edit&id=<?php echo $record->pk_category_news_id; ?>">Edit</a>&nbsp;|&nbsp;
						<a href="admin.php?controller=add_edit_category_news&act=delete&id=<?php echo $record->pk_category_news_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>

			<style type="text/css">
				.pagination{padding: 0px; margin: 0px;}
			</style>
			<ul class="pagination pull-right">
				<li><a href="" title="">Trang</a></li>&nbsp;
				<?php for($i=1; $i<=$num_page; $i++):?>
					<li><a href="admin.php?controller=category_news&&p=<?php echo $i;?>" title=""><?php echo $i;?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</div>