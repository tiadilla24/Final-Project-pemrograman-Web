<?php

$fp = fopen("dataperpus.txt","a+"); //fopen digunakan untuk membuka file data dalam txt.
$nama = $_POST['nama']; //variabel untuk menampung data berupa nama yg diinputkan kedalam variabel nama peminjam buku
$nim = $_POST['nim']; //variabel untuk menampung data berupa nim yg diinputkan kedalam variabel nim
$alamat = $_POST['alamat']; //variabel untuk menampung data berupa alamat peminjam buku yg diinputkan kedalam variabel alamat
$telepon = $_POST['telepon']; //variabel untuk menampung data berupa nomor telepon yg diinputkan kedalam variabel nomor telepon
$judul = $_POST['judul']; //variabel untuk menampung data berupa judul buku yg diinputkan kedalam variabel judul buku
$lama = $_POST['lama']; //variabel untuk menampung data berupa batas hari peminjaman yg diinputkan


fputs($fp,"$nama|$nim|$alamat|$telepon|$judul|$lama\n"); //fputs digunakan untuk memasukkan semua data variabel kedalam notepad
fclose($fp);
echo "<h2> Terima Kasih, Selamat Membaca! Data Anda Sudah Tersimpan</h2><br>";
echo "<a href=lihatform.php class='btn btn-info'> Lihat Data </a>";
?>