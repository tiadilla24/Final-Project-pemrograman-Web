<!DOCTYPE html>
<html>
<head>
	<title>Proyek Akhir Pemrograman Web</title>
	<!-- Style Css -->
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<!-- Style Javascript -->
	<script language="javascript" src="js/javascript.js"></script>
</head>
<body>

<div class="header">

</div>
	<div class="menubar">
		<ul>
			<li><a href="index.html"><b>Biodata</b></a></li>
			<li><a href="cari.html"><b>Pencarian Data Interaktif</b></a></li>
			<li><a href="form.php"><b>Form</a></b></li>
			<li><a href="lihatform.php"><b>Lihat Data Form</b></a></li>
		</ul>
</div>	


<div class="tampilan">
	<br><br>
	<h2><font color="white">HALAMAN LIHAT DATA PEMINJAMAN BUKU</font></h2>
	<hr width="90%">

	<br>
	<center>
	<table border="1" width="80%" >
	            	<thead class='alert-success'>
	            		<tr>
                        <th><center>Nama</center></th>
                        <th><center>NIM</center></th>
                        <th><center>Alamat</center></th>
                        <th><center>Telepon</center></th>
                        <th><center>Judul Buku</center></th>
                        <th ><center>Lama Pinjam</center></th>

                    </tr>
                    </thead>
                    <tbody>
<?php
$fp = fopen("dataperpus.txt","r"); //fopen untuk membuka file data dalam txt dan cuma baca data
while ($isi = fgets($fp,80)) //fungsi perulangan yang mana datanya diambil menggunakan fungsi fgets
{
$tia = explode("|",$isi); //pemisah data satu dengan yang lainnya
echo"<tr>";
echo "<td><center> $tia[0]</center></td>"; //berfungsi menampilkan data index ke-0
echo "<td><center> $tia[1]</center></td>"; //berfungsi menampilkan data index ke-1
echo "<td><center> $tia[2]</center></td>"; //berfungsi menampilkan data index ke-2
echo "<td><center> $tia[3]</center></td>"; //berfungsi menampilkan data index ke-3
echo "<td><center> $tia[4]</center></td>"; //berfungsi menampilkan data index ke-4
echo "<td><center> $tia[5] Hari</center></td>"; //berfungsi menampilkan data index ke-5
}
echo"</tr>";
echo "</table>";
?>
</tbody>
</table>
</center>

	
	<br><br><br><br>


	
	
</div>



<div class="footer">
	<br>
		<font color="#6495ED"><b>&copy</b></font>&nbsp Tia Dilla Shafira - Universitas Ahmad Dahlan <font color="#6495ED"><b>2019</b></font>
</div>

</body>
</html>