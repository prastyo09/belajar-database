<meta http-equiv="refresh" content="1; url=karyawan.php">
<?php 
    include"koneksi.php";
    $no=$_GET['no'];
    $hapus=mysqli_query($koneksi,"DELETE FROM `tbkaryawan` WHERE `no` = '$no'");
    if ($hapus) {
        echo"Hapus Data Berhasil";
    } else {
        echo"Hapus Data Gagal";
    }
?>