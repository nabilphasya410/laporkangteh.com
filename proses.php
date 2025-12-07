<?php
$koneksi = mysqli_connect("127.0.0.1", "root", "", "lapor_kangteh");
mysqli_query($koneksi, "SET time_zone = '+07:00'");
date_default_timezone_set('Asia/Jakarta');

$nama = $_POST['nama'];
$email = $_POST['email'];
$kelas = $_POST['kelas'];
$kategori = $_POST['kategori'];
$aspirasi = $_POST['aspirasi'];
$submit = $_POST['submit'];
$submit = date("Y-m-d H:i:s");

$tabel = "laporan";

$query = "INSERT INTO `$tabel` (nama, email, kelas, kategori, aspirasi, submit) VALUES('$nama','$email','$kelas','$kategori','$aspirasi','$submit')";

mysqli_query($koneksi, $query);

header("Location: tuntas.html");
exit;
?>