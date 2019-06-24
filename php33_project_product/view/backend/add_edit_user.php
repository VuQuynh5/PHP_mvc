<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit user</div>
		<div class="panel-body">
		<form method="post" action="<?php echo $form_action; ?>">
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Full Name</div>
				<div class="col-md-10">
					<input  type="text" value="<?php echo isset($arr->c_fullname)?$arr->c_fullname:''; ?>" name="c_fullname" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Email</div>
				<div class="col-md-10">
					<input type="email" value="<?php echo isset($arr->c_email)?$arr->c_email:''; ?>" name="c_email" class="form-control" required>
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Password</div>
				<div class="col-md-10">
					<input type="password" name="c_password" class="form-control" <?php if(isset($arr->c_email)):?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else:?> requeired <?php endif;?> >
				</div>
			</div>
			<!-- end rows -->
			<!-- rows -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" value="Process" class="btn btn-primary">
				</div>
			</div>
			<!-- end rows -->
		</form>
		</div>
	</div>
</div>