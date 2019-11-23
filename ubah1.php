<?php 
include"koneksi.php";
if(isset($_POST['nama'])) {
    $nama = $_POST['nama'];
}
if(isset($_POST['alamat'])) {
    $alamat = $_POST['alamat'];
}
if(isset($_POST['jabatan'])) {
    $jabatan = $_POST['jabatan'];
}
if(isset($_GET['proses'])) {
    $proses = $_GET['proses'];
}
// echo $proses;
// $proses = $_GET['proses'];
if(isset($_GET['no'])) {
    $no = $_GET['no'];
}
// $no=$_GET['no'];
if(isset($_GET['proses']) == 'UPDATE') {
    $ubahdata=mysqli_query($koneksi,"UPDATE `tbkaryawan` SET `nama`='$nama',`alamat`='$alamat',`jabatan`='$jabatan' WHERE `no`='$no'");
    echo"proses ubah data berhasil";
}
$tampil = mysqli_query($koneksi,"SELECT * FROM `tbkaryawan` WHERE `no`='$no'");
$cetak = mysqli_fetch_array($tampil);
?>

<form action="?page=ubah1&&proses=update&&no=<?=$no?>" method="post" name="form1">
    <table width="491" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#00ff00">
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td width="138" bgcolor="#ffffff">Nama</td>
            <td width="338" bgcolor="#ffffff"><input type="text" name="nama" id="nama" value="<?=$cetak['nama']?>"></td>
        </tr>
        <tr>
            <td bgcolor="#ffffff">Alamat</td>
            <td bgcolor="#ffffff"><textarea name="alamat" id="alamat"><?=$cetak['alamat']?></textarea></td>
        </tr>
        <tr>
            <td bgcolor="#ffffff">Jabatan</td>
            <td bgcolor="#ffffff"><input type="text" name="jabatan" id="jabatan" value="<?=$cetak['jabatan']?>"></td>
        </tr>
        <tr>
            <td bgcolor="#ffffff">&nbsp;</td>
            <td bgcolor="#ffffff">
                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Reset" name="submit2">
                <a href="karyawan.php">Tampil Data</a>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
    </table>
</form>