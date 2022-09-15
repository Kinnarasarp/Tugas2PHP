<?php

$siswa = [
    [
        "id" => "1",
        "foto" => "1646876172_lT8hXTsyH7M.jpg",
        "nama" => "Kinnaras"
    ],
    [
        "id" => "2",
        "foto" => "kapkanndodok.jpg",
        "nama" => "Bagas"
    ],
    [
        "id" => "3",
        "foto" => "ff287e5f-534b-43a3-83bb-6e91ac422a27.jpg",
        "nama" => "Zulfikar"
    ],
    [
        "id" => "4",
        "foto" => "Xm97Yw96.jpg",
        "nama" => "Satria"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa (Siswa)</h1>

    <div>
        <table border="1" cellspacing="1" cellpadding="10" width="40%">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
            </tr>
            <?php foreach ($siswa as $x => $value) : ?>
                <tr align="center">
                    <td><?=$value['id']?></td>
                    <td><img src="<?=$value['foto']?>" height="100px" alt=""></td>
                    <td><?=$value['nama']?></td>
                </tr>
            <?php endforeach?>
        </table>
    </div>
</body>
</html>