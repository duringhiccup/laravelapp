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
		
			@foreach ($data as $d)
			<tr>
			<td>{{ $d->id}}</td>
			<td>{{ $d->nama}}</td>
			<td>{{ $d->notelp}}</td>
			<td>{{ $d->alamat}}</td>
			</tr>
			@endforeach
		
	</table>
</body>
</html>