<?php

class controller_login{

	public $model;
	public function __construct(){
		$this->model=new model();

		//khi user an nut submit
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$c_email=$_POST["c_email"];
			$c_password=$_POST["c_password"];
			
			//ma hoa password bang ham MD5
		   $c_password=md5($c_password);
		   $check=$this->model->get_a_record("select c_email,c_password from tbl_user where c_email='$c_email' ");

			if(isset($check->c_email)){
				//kiem tra password
				if($c_password ==$check->c_password){
					//dang nhap thanh cong -> tao bien session
					$_SESSION["c_email"]=$c_email;
					//di chuyen den trang admin
					header("location:admin.php");
				}
			}
		}
		include 'view/backend/view_login.php';
	}
}
new controller_login();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Controller login</h1>
</body>
</html>