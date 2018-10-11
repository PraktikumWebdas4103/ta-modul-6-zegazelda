<?php 
 
include 'koneksi.php';
$id = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pass = $_POST['pass'];
 
mysql_query("UPDATE registrasi SET nama= $nama, alamat=$alamat, nim=$id, pass=$pass");
 
header("location:index.php?pesan=update");
?>