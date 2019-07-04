<!DOCTYPE html>
<html>
<head>
	<title>Proyek Akhir Pemrograman Web</title>
	<!-- Style Css -->
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<!-- Style Javascript -->
	<script language="javascript" src="js/tia.js"></script>
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
	<h2><font color="white">HALAMAN FORM DATA PEMINJAMAN BUKU</font></h2>
	<hr width="90%">

	<br>
	<form class="form-horizontal" action="proses.php" method="post" onsubmit="valid()">
		<table>	
				<tr>	
				<td>Nama Peminjam Buku</td><td>:</td>
				<td><input type="text" name="nama"></td>
				</tr>
				<tr>	
				<td>NIM</td><td>:</td>
				<td><input type="text" name="nim"></td>
				</tr>
				<tr>	
				<td>Alamat</td><td>:</td>
				<td><input type="text" name="alamat"></td>
				</tr>
				<tr>	
				<td>Nomor telepon</td><td>:</td>
				<td><input type="text" name="telepon"></td>
				</tr>
				<tr>	
				<td>Judul Buku Yang Dipinjam</td><td>:</td>
				<td><input type="text" name="judul"></td>
				</tr>
				<tr>	
				<td>Lama Peminjaman Buku</td><td>:</td>
				<td><input type="text" name="lama"></td>
				</tr>
				<tr>
					<td></td><td></td>
					<td><input type="submit" name="submit" value="submit"></td>
				</tr>
		</table>
			</form>

	
	<br><br><br><br>


	
	
</div>



<div class="footer">
	<br>
		<font color="#6495ED"><b>&copy</b></font>&nbsp Tia Dilla Shafira - Universitas Ahmad Dahlan <font color="#6495ED"><b>2019</b></font>
</div>

</body>
</html>