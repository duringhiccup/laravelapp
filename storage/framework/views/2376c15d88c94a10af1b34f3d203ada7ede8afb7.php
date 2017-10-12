<!DOCTYPE html>
<html>
<head>
	<title>Homestay</title>
</head>
<body>
	<table>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>No telp</th>
			<th>Alamat</th>
		</tr>
		
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
			<td><?php echo e($d->id); ?></td>
			<td><?php echo e($d->nama); ?></td>
			<td><?php echo e($d->notelp); ?></td>
			<td><?php echo e($d->alamat); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</table>
</body>
</html>