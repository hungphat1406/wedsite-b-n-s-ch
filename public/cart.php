<?php include("inc/top.php"); ?>	

	<h1>THÔNG TIN GIỎ HÀNG</h1>
	<?php if(demhangtronggio() == 0) { ?>
		<h4>Giỏ hàng hiện tại đang rỗng...</h4>
		<p>Vui lòng chọn mua để thêm sản phẩm vào giỏ hàng.</p>
	<?php 
	}
	else {
	?>
	<h5>Giỏ hàng của bạn:</h5>
	<form actor="index.php">
		<table class="table table-hover">
			<tr>
				<th>Hình ảnh</th>
				<th>Tên hàng</th>
				<th>Đơn giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
			</tr>
			<?php foreach($giohang as $id => $mh) : ?>
			<tr>
				<td>
					<img width="50" src="../<?php echo $mh["hinhanh"]; ?>">
				</td>
				<td> <?php echo $mh["tenmathang"]; ?> </td>
				<td> <?php echo number_format($mh["giaban"]); ?> </td>
				<td> 
					<input type="number" name="mh[<?php echo $id; ?>]" value="<?php echo number_format($mh["soluong"]); ?>">
					</td>
				<td> <?php echo number_format($mh["thanhtien"]); ?>đ</td>
			</tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="3"></td>
				<td class="fw-bold"> Tổng tiền </td>
				<td class="text-danger fw-bold">
					<?php echo number_format(tinhtiengiohang()); ?>đ
				</td>
			</tr>
		</table>
		<div class="row">
			<div class="col">
				<a class="btn btn-danger" href="index.php?action=xoagiohang">Xoá tất cả</a>
			</div>
			<div class="col text-end">
				<input type="hidden" name="action" value="capnhatgio">
				<input type="submit" class="btn btn-info" value="Cập nhật">
				<a href="index.php?action=thanhtoan" class="btn btn-success">Thanh toán</a>
			</div>
		</div>
	</form>
	<?php } ?>
	
<?php include("inc/bottom.php"); ?>