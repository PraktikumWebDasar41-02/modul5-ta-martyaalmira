<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran</title>
</head>
<body>
<table>
<h3>Formulir Pendaftaran</h3>
	<form method="POST">
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nim"></td>
		</tr>

		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Tanggal lahir</td>
			<td><input type="date" name="tgl"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jk" value="Wanita">Wanita</td>
			<td><input type="radio" name="jk" value="Laki-laki">Laki-laki</td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>

		<tr>
			<td>Fakultas
			<select>
			<option name="fakultas" value="Ekonomi Bisnis">Ekonomi Bisnis</option>
			<option name="fakultas" value="Ilmu Komunikasi Bisnis">Ilmu Komunikasi Bisnis</option>
			<option name="fakultas" value="Ilmu Terapan">Ilmu Terapan</option>
			<option name="fakultas"value="Industri Kreatif">Industri Kreatif</option>
			</select><td>
		</tr>

		<tr>
			<td>Program Studi
			<select>
			<option name="prodi"value="MBTI">MBTI</option>
			<option name="prodi" value="Ilmu Komunikasi">Ilmu Komunikasi</option>
			<option name="prodi" value="Manajemen Informatika">Manajemen Informatika</option>
			<option name="prodi" value="Manajemen Pemasaran">Manajemen Pemasaran</option>
			<option name="prodi" value="Desain Interior">Desain Interior</option>
			<option name="prodi" value="Teknik Fisika">Teknik Fisika</option>
			</select></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
		</tr>


	</form>
</table>

</body>
</html>


<?php
$data =mysqli_connect('localhost', 'root', '', 'd_modul5');

session_start();
//$_SESSION ["nama"] = $_POST['nama'];
//$_SESSION ["email"] = $_POST['email'];

if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prodi'];
	$fakultas = $_POST['fakultas'];

	$coba = true;

		if (empty($nim)) {
			echo "NIM tidak boleh kosong<br>";
			$coba = false;
		}else{
			if (strlen($nim)!=10 && !is_numeric($nim)) {
				echo "NIM Harus 10 digit dan angka<br>";
				$coba = false;
			}
		}

	$cek = mysqli_query($data,"INSERT INTO t_jurnal1 VALUES($nim, '$nama', '$email','$tgl','$jk','$prodi','$fakultas')");
	if($cek){
		header("location:tampil.php");
	}
}
?>