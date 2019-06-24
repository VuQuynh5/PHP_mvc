<div class="row">
	<div class="col-md-12">
		<!-- card -->		
		<div class="panel panel-primary">
			<div class="panel-heading" style="padding:7px !important;">Danh sách đơn hàng</div>
				<div class="panel-body">
				<!-- table -->
				<table class="table table-hover table-bordered">
					<tr>
						<th>Họ và tên</th>
						<th>Địa chỉ</th>
						<th>Điện thoại</th>
						<th>Email</th>
						<th>Ngày mua</th>
						<th style="width: 100px;">Trạng thái</th>
						<th>Giá</th>
						<th style="width: 100px;"></th>
					</tr>
					<?php foreach($arr as $rows): ?>
					<?php 
						//lay thong tin khach hang
						$customer = $this->model->get_a_record("select * from tbl_customer where customer_id=".$rows->customer_id);
					 ?>
					<tr>
						<td><?php echo $customer->hoten; ?></td>
						<td><?php echo $customer->diachi; ?></td>
						<td><?php echo $customer->dienthoai; ?></td>
						<td><?php echo $customer->email; ?></td>
						<td><?php echo $rows->date; ?></td>
						<td>
							<?php if($rows->trangthai == 1): ?>
								Đã giao hàng
							<?php else: ?>
								<span style="color:red;">Chưa giao hàng</span>
							<?php endif; ?>
						</td>
						<td><?php echo number_format($rows->gia); ?>VNĐ</td>
						<td style="text-align: center;">
							<a href="admin.php?controller=order_detail&order_id=<?php echo $rows->order_id; ?>" class="btn btn-primary">Chi tiết</a>
						</td>
					</tr>	
					<?php endforeach; ?>		
				</table>
				<!-- end table -->
				</div>
				<div class="card-footer" style="padding:7px !important">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Trang</a></li>
					<?php for($i = 1; $i <= $num_page; $i++): ?>	
						<li class="page-item"><a class="page-link" href="admin.php?controller=user&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php endfor; ?>	
					</ul>
				</div>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>