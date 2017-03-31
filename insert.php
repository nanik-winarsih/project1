<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>INSERT DATA</title>
</head>
<body>
		<form method="post" action="">
			<table align="center" width=600>
				<tr>
					<td colspan=3>
						<h1 align="center">Insert Data Mahasiswa</h1><hr noshade size=7 color='black'/>
					</td>
				</tr>
				<tr>
					<td><b>NPM</b></td>
					<th> : </th>
					<td><input type="text" name="npm" size="30" maxlength="30"/></td>
				</tr>
				<tr>
					<td><b>Nama Lengkap</b></td>
					<th> : </th>
					<td><input type="text" name="nama" size="30" maxlength="30"/></td>
				</tr>
				<tr>
					<td><b>Tempat Lahir</b></td>
					<th> : </th>
					<td><input type="text" name="tempat_lahir" size="30" maxlength="30"/></td>
				</tr>
				<tr>
					<td><b>Tanggal Lahir</b></td>
					<th> : </th>
					<td>
						<select name="tgl_lahir">
							<?php
								for($i=1; $i<=31; $i++){ 
									echo "<option value='".$i."'>".$i."</option>";
								}
							?>
						</select>
						<select name="bln">
							<?php
								for($i=1; $i<=12; $i++){
									echo "<option value='".$i."'>".$i."</option>";
								}
							?>
						</select>
						<select name="thn">
							<?php
								for($i=1990; $i<=2007; $i++){
									echo "<option value='".$i."'>".$i."</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td><b>Alamat</b></td>
					<th> : </th>
					<td><textarea name="alamat" cols="32"rows="5"></textarea></td>
				</tr>
				<tr>
					<td><b>Jenis Kelamin</b></td>
					<th> : </th>
					<td>
						<input type="radio" name="jk" value="Laki-laki" /> Laki-laki <br/>
						<input type="radio" name="jk" value="Perempuan" /> Perempuan</td>
				</tr>
				<tr>
					<td><b>Program Studi</b></td>
					<th> : </th>
					<td><select name="prodi">
							<option value="">Pilih Program Studi</option>
							<option value="Tekhnik Informatika">Tekhnik Informatika</option>
							<option value="Tekhnik Sipil">Tekhnik Sipil</option>
							<option value="Bahasa Indonesia">Bahasa Indonesia</option>
							<option value="Bahasa Inggris">Bahasa Inggris</option>
							<option value="Matematika">Matematika</option>
							<option value="Ilmu Hukum">Ilmu Hukum</option>
							<option value="Akuntansi">Akuntansi</option>
							<option value="Management">Management</option>
							<option value="Ilmu Administrasi Negara">Ilmu Administrasi Negara</option>
							<option value="Pertanian">Pertanian</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><b>Kelas</b></td>
					<th> : </th>
					<td>
						<input type="radio" name="kelas" value="Pagi" /> pagi<br/> 
						<input type="radio" name="kelas" value="Sore" /> Sore
					</td>
				</tr>
				<tr>
					<td><b>Tahun Angkatan</b></td>
					<th> : </th>
					<td>
						<select name="angkatan">
							<?php
								for($i=2010; $i<=2020; $i++){ 
									echo "<option value='".$i."'>".$i."</option>";
								}
							?>
						</select>
				</tr>
				<tr>
					<td colspan=3><hr noshade size=7 color='black'/></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" name="submit" value="Simpan"/> 
						<input type="reset" value="Reset" />
					</td>
				</tr>
			</table>
		</form>
		
	<?php
		if(isset($_POST['submit']))
		{	
			$npm = $_POST['npm'];
			$nama = $_POST['nama'];
			$tempat_lahir = $_POST['tempat_lahir'];
			$tgl_lahir = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl_lahir'];
			$alamat = $_POST['alamat'];
			$jk = $_POST['jk'];
			$prodi = $_POST['prodi'];
			$kelas = $_POST['kelas'];
			$angkatan = $_POST['angkatan'];
		
			$insert = "insert into tbl_mahasiswa(npm, nama, tempat_lahir, tanggal_lahir, alamat, jenis_kelamin, prodi, kelas, angkatan) 
					   values('$npm', '$nama', '$tempat_lahir', '$tgl_lahir', '$alamat', '$jk', '$prodi', '$kelas', '$angkatan')";
		    $insert_query = mysql_query($insert);
			
			if($insert_query) {
				echo "<script>alert('Data Mahasiswa Berhasil Ditambahkan');
				window.location.href=('index.php');</script>";
			} else {
				echo "<script>alert('Data Mahasiswa GAGAL Ditambahkan');
				window.location.href=('index.php');</script>";
			}
		}
	?>
</body>
</html>