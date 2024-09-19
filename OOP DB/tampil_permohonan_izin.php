<?php
include('connection.php');
$data = $izin->tampilData();

include('navbar.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Dosen</th>
			<th>NIP</th>
			<th>Pangkat</th>
			<th>Jabatan</th>
			<th>Unit Kerja</th>
		</tr>
		<?php
		$no = 1;
		foreach ($data as $row) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_dsn']; ?></td>
				<td><?php echo $row['nip']; ?></td>
				<td><?php echo $row['pangkat_jabatan']; ?></td>
				<td><?php echo $row['jabatan']; ?></td>
				<td><?php echo $row['unit_kerja']; ?></td>
			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>