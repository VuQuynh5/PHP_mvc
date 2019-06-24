<?php
//start session
session_start();
//load file config.php
include 'config.php';
include "model/model.php";
//lay bien controler truyen tu url
$controller=isset($_GET["controller"])?$_GET["controller"]:'';
//noi them cac tham so de bien $controller thanh duong dan thuc-> nham muc dich loas mvc
$file_controller="controller/frontend/controller_$controller.php";
//neu bien file controller la duonng dan thuc thid hien thi template layout _trangchitiet.php , con khong thi hien thi layout_tranchu.php
if(file_exists($file_controller))
	include "view/frontend/layout_trangchitiet.php";
else
	include  "view/frontend/layout_trangchu.php";

?>