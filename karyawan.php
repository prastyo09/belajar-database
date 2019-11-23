<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>Karyawan Si Mamat</title>
</head>
<body>
<div align="left"><a href="index.html">Home</a></div>
    <p align="center">DATA KARYAWAN</p>
    <br>
    <table width="627" border="1" bgcolor="#999999" align="center">
        <body>
            <tr bgcolor="#00FF00">
                <td width="15">No</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Jabatan</td>
            </tr>
            <?php
            include"koneksi.php";
            $kayawan=mysqli_query($koneksi,"SELECT * FROM tbkaryawan");
            while($tampil=mysqli_fetch_array($kayawan)) {
            ?>
            <tr>
                <td align="center" bgcolor="#FFFFFF"><?=$tampil["no"]?></td>
                <td bgcolor="#FFFFFF"><?=$tampil["nama"]?></td>
                <td bgcolor="#FFFFFF"><?=$tampil["alamat"]?></td>
                <td bgcolor="#FFFFFF"><?=$tampil["jabatan"]?></td>
            </tr>
            <?php } ?>
        </body>
    </table>
    <br>
    <br>
    <div align="center">
        <a href="form_input.php">Input Data</a>
        <a href="ubah.php">Ubah/Hapus Data</a>
        <a href="cari.php">Cari Data</a>
    </div>
</body>
</html>