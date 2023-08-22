<?php
$students = [
    [
        "nama" => "Deni",
        "domisili" => "Medan",
        "jurusan" => "Teknik Informatika",
        "universitas" => "Universitas Mikroskil",
        "kelas" => "Web Developer",
        "foto" => "foto.jpg",
    ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Diri</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php foreach ($students as $student) { ?>
        <div class="card">
            <img src="<?= $student["foto"] ?>" alt="Profil" style="width:100%">
            <div class="container">
                <h2><?= $student["kelas"] ?></h2>
                <p>Nama : <?= $student["nama"] ?></p>
                <p>Domisili : <?= $student["domisili"] ?></p>
                <p>Jurusan : <?= $student["jurusan"] ?></p>
                <p>Universitas : <?= $student["universitas"] ?></p>
            </div>
        </div>
    <?php } ?>
</body>

</html>