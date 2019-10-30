<!-- untuk menghubungkan php dengan mysql database -->
<?php
$koneksi=mysqli_connect("localhost","root","");
mysqli_select_db($koneksi,"apkaryawan_12tkj4_rahmat") or die ("database tidak bisa dibuka");
?>