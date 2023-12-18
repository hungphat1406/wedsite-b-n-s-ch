<?php include("inc/top.php"); ?>	
	<h1>Thanh toán hoá đơn</h1>
	<div class="row">
		<!-- Thông tin người thanh toán hoá đơn -->
		<div class="col-6"> 

		</div>

		<!-- Thông tin đơn hàng -->
		<div class="col-6">
			<table class="table table-hover">
			<tr class="table table-primary">
				<th>Sản phẩm</th>
				<th>Đơn giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
			</tr>

			<?php foreach($giohang as $id => $mh) : ?>
				<tr>
					<td> <img width="50" src="../<?php echo $mh["hinhanh"]; ?>"> <?php echo $mh["tenmathang"]; ?> </td>
					<td> <?php echo number_format($mh["giaban"]); ?> </td>
					<td> 
						<?php echo number_format($mh["soluong"]); ?>
					</td>
					<td> <?php echo number_format($mh["thanhtien"]); ?>đ</td>
				</tr>
			<?php endforeach; ?>

			<tr class="table table-primary">
				<th></th>
				<th></th>
				<th class="text-danger">Bill:</th>
				<th>
					<p class="text-danger fw-bold"><?php echo number_format(tinhtiengiohang()); ?>đ</p>
				</th>
			</tr>
			</table>
		</div>
	</div>
	
<?php include("inc/bottom.php"); ?>