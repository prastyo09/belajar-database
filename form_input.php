<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data</title>
</head>
<body> 
    <div align="left"><a href="index.html">Home</a></div>   
    <div align="center">INPUT DATA</div>
    <hr>
    <br><br>
    <form action="proses_tambah.php" id="form1" name="form1" method="post">
        <table align="center">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" id="alamat" cols="35" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan" id="jabatan"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input type="submit" value="Submit" name="sumbit">
                    <input type="reset" value="Reset" name="reset">
                </td>
            </tr>
        </table>
    </form>
    <br>
    <div align="center"><a href="karyawan.php">Data Karyawan</a></div>
</body>
</html>