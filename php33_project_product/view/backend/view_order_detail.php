<div class="row">
	<div class="col-md-12">
		<!-- card -->
		<?php 
			$order = $this->model->get_a_record("select * from tbl_order where order_id=".$_GET["order_id"]);
			if($order->trangthai == 0):
		 ?>
		<div style="margin:15px 0px">
			<a href="admin.php?controller=order_detail&act=da_giao_hang&order_id=<?php echo $_GET["order_id"]; ?>" class="btn btn-primary">Xác nhận đã giao hàng</a>
		</div>
		<?php endif; ?>
		<div class="panel panel-primary">
			<div class="panel-heading" style="padding:7px !important;">Chi tiết đơn hàng</div>
				<div class="panel-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th style="width: 100px;">Ảnh</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Giá</th>
					</tr>	
				<?php 
					$arr = $this->model->get_all("select *,(select c_img from tbl_product where tbl_product.pk_product_id=tbl_order_detail.fk_product_id) as anhsanpham,(select c_name from tbl_product where tbl_product.pk_product_id=tbl_order_detail.fk_product_id) as tensanpham from tbl_order_detail where order_id=".$_GET["order_id"]);
					foreach($arr as $rows):
				 ?>
					<tr>
						<td style="text-align: center;">
							<img src="public/upload/product/<?php echo $rows->anhsanpham; ?>" style="width: 100px;">
						</td>
						<td><?php echo $rows->tensanpham; ?></td>
						<td style="text-align: center;"><?php echo $rows->soluong; ?></td>
						<td style="text-align: center;"><?php echo number_format($rows->gia); ?> VNĐ</td>
					</tr>	
				<?php endforeach; ?>		
				</table>
				<!-- end table -->
				</div>				
			</div>
		</div>
		<!-- end card -->
	</div>
</div>