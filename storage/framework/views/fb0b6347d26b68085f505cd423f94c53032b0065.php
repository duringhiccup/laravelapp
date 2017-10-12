<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>

<form action="<?php echo e(route('homestay.store')); ?>" method="post">
	<?php echo e(csrf_field()); ?>

	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>No telp</td>
			<td><input type="text" name="notelp"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat"></td>
		</tr>
	</table>

	<input type="submit" value="submit">
</form>

</body>
</html>