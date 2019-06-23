<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="#">
	<link rel="stylesheet" type="text/css" href="public/backend/css/bootstrap.min.css">
	<!--add file ij cua ckedito-->
	<script type="text/javascript" src="public/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="active"><a href="admin.php?controller=category_news">Danh mục tin tức</a></li>
            <li class="active"><a href="admin.php?controller=news">Tin tức</a></li>
            <li class="active"><a href="admin.php?controller=user">Quản lý user</a></li>
            <li class="active"><a href="admin.php?controller=logout">Đăng xuất</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

   <div class="container" style="margin-top:70px;">
   	<?php 
   		//kiem tra xem duong dan o bien $file_controller co ton tai khong , neu ton tai thi load mvc
   	if(file_exists($file_controller))
   		include $file_controller;

   	?>
   </div>

</body>
</html>