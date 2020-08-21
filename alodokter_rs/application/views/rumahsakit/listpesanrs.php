<table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:wrap content">
	<thead>
		<th>ID PESAN RS</th>
		<th>ID RS</th>
		<th>NAMA</th>
		<th>TANGGAL</th>
		<th>WAKTU</th>
		<th width="135">OPSI</th>
	</thead>
	<tbody>
		<?php foreach ($pesan_rs as /*$key =>*/ $rs): ?>
			<tr>
				<td><?php echo $rs['id_pesanrs'] ?></td>
				<td><?php echo $rs['id_rs'] ?></td>
				<td><?php echo $rs['nama'] ?></td>
				<td><?php echo $rs['tgl_pesan'] ?></td>
				<td><?php echo $rs['waktu_pesan'] ?></td>
				<td>
					<a style="color: red;" href="<?php echo base_url('C_pesanrs/delete/'.$rs['id_pesanrs']) ?>" class="btn btn-sm btn-danger">Hapus Pesanan</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>