function cari() {
var kata = document.formcari.keyword.value; //sebagai penampung data pada form data yang diinput sebelumnya dalam variabel
var hasil = "http://www.google.com/search?q=" + kata ; //sebagai penampung link google ke variabel
window.open(hasil, 'google', config='height=500, width=750, scrollbars=yes location=yes') //membuka situs baru menuju google menyesuaikan kata kunci yang diketikkan
}

function gela(){
	var date = new Date(); //penampung format tanggal
	document.getElementById("tia").innerHTML=date;
}

function valid(){
	alert("Data Anda Tersimpan"); //alert berfungsi menampilkan kotak pesan berisi pemberitahuan data anda tersimpan
}