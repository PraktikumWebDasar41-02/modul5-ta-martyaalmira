<?php
$data = mysqli_connect('localhost','root','','d_modul5');
$result = mysqli_query($data, "SELECT * FROM t_jurnal1");

echo 
'<center><table border = "1px">
 <thead>
  <tr>
   <th>NIM</th>
   <th>Nama</th>
   <th>Tanggal lahir</th>
   <th>Jenis Kelamin</th>
   <th>Prodi</th>
   <th>Fakultas</th>
   <th>Email</th>
  </tr>
 </thead>
<tbody>';

$row = mysqli_fetch_row($result);
echo
 '<tr>
  <td>'.$row[0].'</td>
  <td>'.$row[1].'</td>
  <td>'.$row[2].'</td>
  <td>'.$row[3].'</td>
  <td>'.$row[4].'</td>
  <td>'.$row[5].'</td>
  <td>'.$row[6].'</td>
 </tr></center>';
?>

<?php
echo "DATA";
 session_start();
 if (isset($_POST['submit'])) {
   $nim=$_POST['nim'];
   $nama=$_POST['nama'];
   $email=$_POST['email'];
   $jk=$_POST['jeniskelamin'];
   $tgl=$_POST['tgl'];
   $prodi=$_POST['prodi'];
   $fakultas=$_POST['fakultas'];  
  header("location : daftar.php");
 }
?>