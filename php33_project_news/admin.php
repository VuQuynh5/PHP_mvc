<?php
//start session
session_start();
//load file config.php
include 'config.php';
include "model/model.php";
//kiem tra neu user chua dang nhao thi yeu cau dang nhao -> kiem tra qua session c_mail xem da ton tai chua
if(isset($_SESSION["c_email"]) == false)
	include "controller/backend/controller_login.php";
else{
	//lay bien controler truyen tu url
	$controller=isset($_GET["controller"])?$_GET["controller"]:'';
	
	//noi them cac tham so de bien $controller thanh duong dan thuc-> nham muc dich loas mvc
	$file_controller="controller/backend/controller_$controller.php";
	include "view/backend/layout.php";
}


?>