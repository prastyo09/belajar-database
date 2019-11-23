<meta http-equiv="refresh" content="1;url=karyawan.php">
<?php
    include"koneksi.php";
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jabatan=$_POST['jabatan'];
    $input=mysqli_query($koneksi,"INSERT INTO `tbkaryawan` (`nama`, `alamat`, `jabatan`) VALUES ('$nama', '$alamat', '$jabatan')");
    if ($input) {
        echo"input data berhasil";
    } else {
        echo"input data gagal";
    }
?>