<html> 
 
<head> 
	<title>Akses dan Manipulasi Data</title> 
	<style type="text/css"> 
		.even { 
		background: #ddd; 
	} 
	</style>
	<script language="JavaScript">
		function konfirmasi(iduser) {
			tanya = confirm('Apakah anda ingin menghapus data dengan id '+ iduser + ' ?');
			if (tanya == true) 
				return true;
			else 
				return false;
	}
	</script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head> 
 
<body>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <ul class="nav nav-pills">
  <li><a href="\bootstrap"><b>Home</b></a></li>
  <li><a href="\bootstrap/profil"><b>Profile</b></a></li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Tugas</b> <b class="caret"></b></a>
        <ul class="dropdown-menu">
			<li><a href="\bootstrap/modul 4">Modul 4</a></li>
			<li class="divider"></li>
			<li><a href="\bootstrap/modul 4/aplikasi_db">Aplikasi db</a></li>
			<li><a href="\bootstrap/modul 4/StudiKasus">Studi Kasus</a></li>
			<li><a href="\bootstrap/modul 4/TugasPraktikum">Tugas Praktikum</a></li>
			<li class="divider"></li>
			<li><a href="\bootstrap/modul 5">Modul 5</a></li>
			<li class="divider"></li>
			<li><a href="\bootstrap/modul 5/LimitasiData.php">Limitasi Data</a></li>
			<li><a href="\bootstrap/modul 5/PagingData.php">Paging Data</a></li>
			<li><a href="\bootstrap/modul 5/PencarianData.php">Pencarian Data</a></li>
			<li><a href="\bootstrap/modul 5/StudiKasus.php">Studi Kasus</a></li>
			<li><a href="\bootstrap/modul 5/tugaskecil1a.php">Tugas Kecil 1a</a></li>
			<li><a href="\bootstrap/modul 5/tugaskecil1b.php">Tugas Kecil 1b</a></li>
			<li><a href="\bootstrap/modul 5/tugaskecil2.php">Tugas Kecil 2</a></li>
			<li><a href="\bootstrap/modul 5/TugasPraktikum.php">Tugas Praktikum</a></li>
        </ul>
      </li>
	</ul>
 
<?php 
ini_set('display_errors',1); 
 
// Meng-include file koneksi dan data handler 
require_once './koneksi.php'; 
require_once './data_handler.php'; 
 
// Konstanta nama tabel 
define('MHS', 'mahasiswa'); 
 
// Memanggil fungsi data handler 
data_handler('?m=data'); 
 
?> 
 
</body> 
</html>