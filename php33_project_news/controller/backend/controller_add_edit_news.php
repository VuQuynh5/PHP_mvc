<?php
class controller_add_edit_news{
	public $model;
	public function __construct(){
		$this->model=new model();
		//-----
		$act=isset($_GET["act"])?$_GET["act"]:"";
		$id=isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
		$p=isset($_GET["p"])&&is_numeric($_GET["p"])?$_GET["p"]:0;
//echo "ok";
		switch ($act) {
			case 'edit':
				$form_action="admin.php?controller=add_edit_news&act=do_edit&p=$p&id=$id";
				//lay 1 ban ghi
				$record=$this->model->get_a_record("select * from tbl_news where pk_news_id=$id ");
				include"view/backend/add_edit_news.php";
				break;
			//khi user nhan nut submit
			case 'do_edit':
				$c_name=$_POST["c_name"];
				$c_description=$_POST["c_description"];
				$c_content=$_POST["c_content"];
				$fk_category_news_id=$_POST["fk_category_news_id"];
				$c_hotnews=isset($_POST["c_hotnews"])?1:0;
				//update ban ghi tuong ung voi id truyen vao
				$this->model->execute("update tbl_news set c_name='$c_name', c_description='$c_description', c_content='$c_content', fk_category_news_id=$fk_category_news_id, c_hotnews=$c_hotnews where pk_news_id=$id ");
				/*neu user uploas anh: de lay thong tin cua file ta sd doi tuong $_FILES
 					$_FILES["ten-formcontrol"]["name"]-> lay ten file
 					$_FILES["ten-formcontrol"]["size"]-> lay kich co filr
 					$_FILES["ten-formcontrol"]["tmp_name"]-> lay duong dan cua file da duoc uplaod len thu muc tmp

				*/
 					if($_FILES["c_img"]["name"] != ""){
 						//------------
 						//lay anh cu va xoa anh cu di
 						$old_img= $this->model->get_a_record("select c_img from tbl_news where pk_news_id=$id ");
 						if($old_img->c_img != "" && file_exists("public/upload/news/".$old_img->c_img) )
 							unlink("public/upload/news/".$old_img->c_img);
 						//-------------

 						//lay ten file
 						$c_img=time().$_FILES["c_img"]["name"];
 						//uplaos file
 						move_uploaded_file($_FILES["c_img"]["tmp_name"],"public/upload/news/$c_img");
 						//update truong c_img
 						$this->model->execute("update tbl_news set c_img='$c_img' where pk_news_id=$id ");
 					}	
 					//di chuyen den trang tin tuc
				header("location:admin.php?controller=news");
				break;

			case 'add':
				$form_action="admin.php?controller=add_edit_news&act=do_add";
				include"view/backend/add_edit_news.php";
				break;

			case 'do_add':
				$c_name =$_POST["c_name"];
				$c_description =$_POST["c_description"];
				$c_content =$_POST["c_content"];
				$fk_category_news_id=$_POST["fk_category_news_id"];
				$c_hotnews=isset($_POST["c_hotnews"])?1:0;
				$c_img="";

				if($_FILES["c_img"]["name"] != ""){
 					//lay ten file
 					$c_img=time().$_FILES["c_img"]["name"];
 					//uplaos file
 					move_uploaded_file($_FILES["c_img"]["tmp_name"],"public/upload/news/$c_img");
 					
 				}
 				//thuc hien them moi ban ghi
 				$this->model->execute("insert into tbl_news set c_name='$c_name', c_description='$c_description', c_content='$c_content', fk_category_news_id=$fk_category_news_id, c_hotnews=$c_hotnews, c_img='$c_img' ");
 				//di chuyen den trang tin tuc
				header("location:admin.php?controller=news");
				break;

			case 'delete':
				//------------
 				//lay anh cu va xoa anh cu di
 				$old_img= $this->model->get_a_record("select c_img from tbl_news where pk_news_id=$id ");
 				if($old_img->c_img != "" && file_exists("public/upload/news/".$old_img->c_img) )
 					unlink("public/upload/news/".$old_img->c_img);
 				//-------------

				$this->model->execute("delete from tbl_news where pk_news_id=$id");
				//di chuyen den trang tin tuc
				header("location:admin.php?controller=news");
				break;
			
			default:
				# code...
				break;
		}
	}
}
new controller_add_edit_news();

?>