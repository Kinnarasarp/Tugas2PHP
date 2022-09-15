<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <td rowspan="3"><img src="<?=$_GET['foto']; ?>" width="200px" alt="kantorguadi"></td>
            <td  align="center">Nama</td>
            <td  align="center"><?=$_GET['nama']; ?></td>
        </tr>
        <tr align="center">
            <td>Alamat</td>
            <td><?=$_GET['alamat']; ?></td>
        </tr>
        <tr  align="center">
            <td>No.Telepon</td>
            <td><?=$_GET['notelp']; ?></td>
        </tr>
    </table>
</body>
</html>