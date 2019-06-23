<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row" style="margin-top: 15px;">
		<div class="col-md-6 col-md-offset-3">
			<!-- card primary -->
			<div class="panel panel-primary">
				<div class="panel-heading" style="padding:7px !important;">Login</div>
				<div class="panel-body">
					<!-- form -->
					<form method="post" action="">
						<!-- form group -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Email</div>
								<div class="col-md-9"><input type="email" name="c_email" required class="form-control"></div>
							</div>
						</div>
						<!-- end form group -->
						<!-- form group -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">Password</div>
								<div class="col-md-9"><input type="password" name="c_password" required class="form-control"></div>
							</div>
						</div>
						<!-- end form group -->
						<!-- form group -->
						<div class="form-group">
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-9">
									<input type="submit" value="Login" class="btn btn-primary"> <input type="Reset" value="Reset" class="btn btn-danger">
								</div>
							</div>
						</div>
						<!-- end form group -->
					</form>
					<!-- end form -->
				</div>
			</div>
			<!-- end card primary -->
		</div>
	</div>
</div>
</body>
</html>