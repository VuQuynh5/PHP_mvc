<div class="col-md-8 col-xs-offset-2">
	<div style="margin-bottom:5px;">
		<a href="admin.php?controller=add_edit_user&act=add" class="btn btn-primary">Add user</a>
	</div>
	
	<?php if(isset($_GET["err"])&&$_GET["err"]=="email_exists"): ?>
	<div class="alert alert-danger">Email da ton tai!</div>
	<?php endif;?>

	<div class="panel panel-primary">
		<div class="panel-heading">List User</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th style="width:100px;"></th>
				</tr>
				<?php foreach($arr as $rows):?>
				<tr>
					<td><?php echo $rows->c_fullname;?></td>
					<td><?php echo $rows->c_email;?></td>
					<td style="text-align:center;">
						<a href="admin.php?controller=add_edit_user&act=edit&id=<?php echo $rows->pk_user_id; ?>">Edit</a>&nbsp;
						<a href="admin.php?controller=add_edit_user&act=delete&id=<?php echo $rows->pk_user_id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
			<style type="text/css">
				.pagination{padding:0px; margin:0px;}
			</style>
			<ul class="pagination">
				<li><a class="desabled" href="" title="">Trang</a></li>
				<?php for($i=1; $i <= $num_page; $i++):?>
				<li><a href="admin.php?controller=user&p=<?php echo $i; ?>" title=""><?php echo $i;?></a></li>
				<?php endfor;?>
			</ul>
		</div>
	</div>
</div>