<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>Si Mamat</title>
</head>
<body>
    <!-- untuk judul di websitenya -->
    <p>DATA KARYAWAN</p>
    <br>

    <!-- tabel untuk melihat daftar karyawan -->
    <table width="627" border="1">
        <body>
            <tr>
                <td>Nomor</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Jabatan</td>
            </tr>

            <!-- script untuk meng-query databasenya -->
            <?php
            include"koneksi.php";
            $kayawan=mysqli_query($koneksi,"SELECT * FROM tbkaryawan");
            while($tampil=mysqli_fetch_array($kayawan)) {
            ?>
            <tr>
                <td><?=$tampil["no"]?></td>
                <td><?=$tampil["nama"]?></td>
                <td><?=$tampil["alamat"]?></td>
                <td><?=$tampil["jabatan"]?></td>
            </tr>
            <?php } ?>
        </body>
    </table>
</body>
</html>