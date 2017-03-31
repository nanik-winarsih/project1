<!DOCTYPE html>
<html>
	<head>
		<title>CRUD DINAMIS</title>
	</head>
<body bgcolor="yellow">
	<?php
		include "koneksi.php";
		
		echo"
			<table border=0 align='center' width=1300>
				<tr align='center'>
					<td>
						<img src='gambar/unira.png' width='100' heigth='100'><br/>
						<h2>DATA MAHASISWA<br/>UNIVERSITAS MADURA</h2>
						<hr noshade size=7 color='black'/>
					</td>
				</tr>
				<tr>
					<td><br/>
						<a href='insert.php' style='text-decoration:none'>
						<img src='gambar/tambah.png'width='30' heigth='30'>TAMBAH DATA</a>
					</td>
				</tr>
			</table>
		";
		
		$query  = "select * from tbl_mahasiswa";
		$tampil = mysql_query($query);
		echo"
		<table border='1' style='border-collapse:collapse' align='center' width=1300>
			<thead>
				<tr>
					<th>NPM</th>
					<th>NAMA</th>
					<th>TEMPAT LAHIR</th>
					<th>TANGGAL LAHIR</th>
					<th>ALAMAT</th>
					<th>JENIS KELAMIN</th>
					<th>PRODI</th>
					<th>KELAS</th>
					<th>ANGKATAN</th>
					<th colspan=2>AKSI</th>
				</tr>
			</thead>
		<tbody>
		";
				while($data = mysql_fetch_array($tampil))
				{
					echo"
						<tr>
							<td>$data[npm]</td>
							<td>$data[nama]</td>
							<td>$data[tempat_lahir]</td>
							<td>$data[tanggal_lahir]</td>
							<td>$data[alamat]</td>
							<td>$data[jenis_kelamin]</td>
							<td>$data[prodi]</td>
							<td>$data[kelas]</td>
							<td>$data[angkatan]</td>
							<td>
								<a href='?id=$data[npm]' style='text-decoration:none'>
								<img src='gambar/edit2.png'/></a>
							</td>
							<td>
								<a href='?id=$data[npm]' style='text-decoration:none'>
								<img src='gambar/hapus.png' /></a>
							</td>
						</tr>
					";
				}
				$jumlah=mysql_num_rows($tampil);
				echo"
					<tr align='center'>
						<td colspan='6'>Jumlah Mahasiswa</td>
						<td colspan='8'>$jumlah</td>
				  </tr>
				";
			echo "
			</tbody>
		</table>
	";
	?>
</body>
</html>