<?php
include('connection.php');
$data = $tugas->tampilData();
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<?php
	include('navbar.php');
	include('filter_tugas.php');
	?>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nomor Surat</th>
			<th>Dosen</th>
			<th>Tanggal</th>
			<th>Tujuan</th>
			<th>Transportasi</th>
			<th>Keperluan</th>
		</tr>
		<?php
		$no = 1;
		foreach ($data as $row) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nomor']; ?></td>
				<td><?php echo $row['nama_dsn']; ?></td>
				<td><?php echo $row['tgl_surat_tugas']; ?></td>
				<td><?php echo $row['tujuan']; ?></td>
				<td><?php echo $row['transportasi']; ?></td>
				<td><?php echo $row['keperluan']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>

</body>
</html>