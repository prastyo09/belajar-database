<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Data</title>
</head>
<body>
    <table>
        <tr>
            <td>
                <p><strong>Cari Berdasarkan Nama</strong></p>
                <form action="" method="post" id="form1" name="form1">
                    <div>
                        <input type="text" name="cari" id="cari">
                        <input type="submit" value="Pencarian" name="Submit">
                    </div>
                </form> <br> <br>
                <?php
                if(isset($_POST['cari'])) {
                    $cari = $_POST['cari'];
                }
                /*$cari=$_POST['cari'];*/
                if (!empty($cari)) {
                ?>
                <p><strong>Hasil Pencarian</strong></p>
                <p>
                    <?php
                    $listkaryawan=mysqli_query($koneksi,"SELECT * FROM tbkaryawan WHERE nama LIKE '%$cari%'") or die(mysqli_error());
                    $hasilcari=mysqli_num_rows($listkaryawan);
                    if ($hasilcari == '0') {
                        echo "<center><blink>Maaf Data yang anda cari tidak ada didalam database</blink></center>";
                    } else {
                        echo "Jumlah seluruh data yang ditemukan adalah <b>$hasilcari</b> data";
                    }
                    ?>

                    <table>
                        <tr>
                            <td><strong>Nomor</strong></td>
                            <td><strong>Nama</strong></td>
                            <td><strong>Alamat</strong></td>
                            <td><strong>Jabatan</strong></td>
                        </tr>
                        <?php
                        while ($listkaryawan1=mysqli_fetch_array($listkaryawan)) {
                        ?>
                        <tr>
                            <td><?=$listkaryawan1["no"]?></td>
                            <td><?=$listkaryawan1["nama"]?></td>
                            <td><?=$listkaryawan1["alamat"]?></td>
                            <td><?=$listkaryawan1["jabatan"]?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </p>
                <?php
                }
                ?>
                <br>
            </td>
        </tr>
    </table>
</body>
</html>