<?php

include("koneksi.php");


if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $id = $_POST['id'];
    $pass = $_POST['pass'];
    $kelas = $_POST['kelas'];
    $kelamin = $_POST['kelamin'];
    $hobi = $_POST['hobi'];
    $fakultas = $_POST['fakultas'];

    // buat query
    $sql = "INSERT INTO registrasi (nama, alamat, nim, pass, kelas, kelamin, hobi, fakultas) VALUE ('$nama', '$alamat', '$id', '$pass', '$kelas', '$kelamin', '$hobi', '$fakultas')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        header('Location: login.php');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: login.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>