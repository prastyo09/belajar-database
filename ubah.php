<div align="left"><a href="index.html">Home</a> <a href="karyawan.php">Karyawan</a></div>
<div align="center">DATA KARYAWAN</div>
<br>
<table width="667" border="0" align="center" cellpadding="3" bgcolor="#999999">
    <tr bgcolor="#00ff00">
        <td bgcolor="#00ff00">Nomor</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jabatan</td>
        <td>&nbsp;</td>
    </tr>
    <?php
        include"koneksi.php";
        $karyawan=mysqli_query($koneksi,"SELECT * FROM tbkaryawan");
        while($tampil = mysqli_fetch_array($karyawan)) {
    ?>
    <tr>
        <td align="center" bgcolor="#FFFFFF"><?=$tampil["no"]?></td>
        <td bgcolor="#FFFFFF"><?=$tampil["nama"]?></td>
        <td bgcolor="#FFFFFF"><?=$tampil["alamat"]?></td>
        <td bgcolor="#FFFFFF"><?=$tampil["jabatan"]?></td>
        <td bgcolor="#ffffff">
            <a href="ubah1.php?no=<?=$tampil["no"]?>">Ubah</a>
            <a href="hapus.php?no=<?=$tampil["no"]?>">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>