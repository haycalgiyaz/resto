<div class="container">
	<div class="col-md-12">
		<div class="col-md-4">
			<div class="form-group">
				<label>Meja</label>
				<input type="text" class="form-control" value="<?php echo $transaksi['nm_meja'] ?>" disabled>
			</div>
			<div class="form-group">
				<label>Payment Method</label>
				<input type="text" class="form-control" value="<?php echo $transaksi['payment_method'] ?>" disabled>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Biaya Service</label>
				<input type="text" class="form-control" value="<?php echo $transaksi['service'] ?>" disabled>
			</div>
			<div class="form-group">
				<label>Total</label>
				<input type="text" class="form-control" value="<?php echo $transaksi['sub_total'] ?>" disabled>
			</div>
			<div class="form-group">
				<label>Grand Total</label>
				<input type="text" class="form-control" value="<?php echo $transaksi['total_akhir'] ?>" disabled>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label>Total Real</label>
				<input type="text" class="form-control" value="<?php echo $transaksi['total_real'] ?>" disabled>
			</div>
			<div class="form-group">
				<label>Bayar</label>
				<input type="text" class="form-control" value="<?php echo $transaksi['bayar'] ?>" disabled>
			</div>
			<div class="form-group">
				<label>Kembalian</label>
				<input type="text" class="form-control" value="<?php echo $transaksi['kembalian'] ?>" disabled>
			</div>
		</div>
		<div class="col-md-12">
			<table class="table table-default">
				<thead>
					<th>Menu</th>
					<th>Qty</th>
					<th>Harga</th>
					<th>Total</th>
				</thead>
				<tbody>
				<?php while ($data = mysqli_fetch_array($detail)) { ?>
					<tr>
						<td><?php echo $data['nm_menu']; ?> </td>
						<td><?php echo $data['qty']; ?> </td>
						<td><?php echo $data['harga']; ?> </td>
						<td><?php echo $data['total']; ?> </td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	
</div>