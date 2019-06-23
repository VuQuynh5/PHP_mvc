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
include "view/frontend/layout.php";
?>