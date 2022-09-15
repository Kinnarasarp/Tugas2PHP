<?php

$siswa = [
    [
        "id" => "1",
        "foto" => "1646876172_lT8hXTsyH7M.jpg",
        "nama" => "Kinnaras",
        "alamat" => "Jl.Manuk",
        "notelp" => "08212"
    ],
    [
        "id" => "2",
        "foto" => "kapkanndodok.jpg",
        "nama" => "Bagas",
        "alamat" => "Jl.Menur",
        "notelp" => "08213"
    ],
    [
        "id" => "3",
        "foto" => "ff287e5f-534b-43a3-83bb-6e91ac422a27.jpg",
        "nama" => "Zulfikar",
        "alamat" => "Jl.Minang",
        "notelp" => "08214"
    ],
    [
        "id" => "4",
        "foto" => "Xm97Yw96.jpg",
        "nama" => "Satria",
        "alamat" => "Jl.Malang",
        "notelp" => "08215"
    ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa (Admin)</title>
</head>
<body>
    <h1>Data Siswa (admin)</h1>

    <div>
        <table border="1" cellspacing="1" cellpadding="10" width="40%">
            <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
                <?php foreach ($siswa as $x => $value) : ?>
                    <tr align="center">
                        <td><?=$value['id']?></td>
                        <td><img src="<?=$value['foto']?>" height="100px" alt=""></td>
                        <td><?=$value['nama']?></td>
                        <td>
                            <a href="detailsiswa.php?nama=<?= $value['nama']; ?>&notelp=<?= $value['notelp']; ?>&alamat=<?= $value['alamat']; ?>&foto=<?= $value['foto']; ?>">
                                <button>Detail</button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach?>
        </table>
    </div>
</body>
</html>