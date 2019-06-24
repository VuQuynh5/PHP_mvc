<?php

class controller_add_edit_category_news{

	public $model;
	public function __construct(){
		$this->model=new model();
		$act=isset($_GET["act"])?$_GET["act"]:"";
		$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;

		switch ($act) {
			case 'add':
				$form_action="admin.php?controller=add_edit_category_news&act=do_add";
				include"view/backend/add_edit_category_news.php";
				break;

			case 'do_add':
				$name=$_POST["c_name"];
				$check=$this->model->num_rows("select pk_category_news_id from tbl_category_news where c_name='$name';");
				if($check!=0){
					header("location:admin.php?controller=category_news&err=error");
				}
				else{
					$this->model->execute("insert into tbl_category_news set c_name='$name'; ");
					header("location:admin.php?controller=category_news");
				}

				break;
			
			case 'edit':
				$form_action="admin.php?controller=add_edit_category_news&act=do_edit&id= $id";
				$a=$this->model->get_a_record("select * from tbl_category_news where pk_category_news_id=$id; ");
				include 'view/backend/add_edit_category_news.php';
				break;

			case 'do_edit':
				$name=$_POST["c_name"];
			   $this->model->execute("update tbl_category_news set c_name='$name' where pk_category_news_id=$id;");
			   header("location:admin.php?controller=category_news");
				break;

			case 'delete':
			  	$this->model->execute("delete from tbl_category_news  where pk_category_news_id=$id;");
			    header("location:admin.php?controller=category_news");
				break;

			default:
				# code...
				break;
		}


		//include "view/backend/add_edit_category_news.php";
	}
}
new controller_add_edit_category_news();
?>