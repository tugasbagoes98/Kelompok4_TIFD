<?php
// $_GET
$mahasiswa = [
    ["Nama" => "Mustika Khoiri", "NIM" => "E41181630", "Jurusan" => "Teknologi Informasi", "Email" => "mustikakhoiri15@gmail.com", "Gambar" => "tika.jpg"],
    ["Nama" => "Mar'atul Khoiri", "NIM" => "E41181631", "Jurusan" => "Hubungan Internasional", "Email" => "maratulkhoiri878@gmail.com", "Gambar" => "tika.jpg"],
    ["Nama" => "Yajid Khoiri", "NIM" => "E41181632", "Jurusan" => "Administrasi Negara", "Email" => "yajidkhoirii@gmail.com", "Gambar" => "tika.jpg"]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
    <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <a href="get2.php?Gambar=<?= $mhs["Gambar"]; ?>&
            Nama=<?= $mhs["Nama"]; ?>&
            NIM=<?= $mhs["NIM"]; ?>&
            Jurusan=<?= $mhs["Jurusan"]; ?>&
            Email=<?= $mhs["Email"]; ?>">
            <?= $mhs["Nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>