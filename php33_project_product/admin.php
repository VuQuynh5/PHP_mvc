<?php 
	// start session
	session_start();
	// load file config
	include "config.php";
	// load file model
	include "model/model.php";
	// kiem tra neu user chua dang nhap thi yeu cau dang nhap -> kiem tra qua session c_mail xem da ton tai chua
	//if (isset($_SESSION['c_email']) == false)
	//	include "controller/backend/controller_login.php";
	//else {
		// lay bien $controller truyen tu url
		$controller = isset($_GET["controller"])?$_GET["controller"]:'';
		// noi them cac tham so de bien $controller thanh duong dan thuc -> nham muc dich load mvc tuong ung
		$file_controller = "controller/backend/controller_$controller.php";
		// load file template
		include "view/backend/layout.php";
	//}
 ?>