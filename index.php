<?php

require_once 'fungsi.php';

$data = show_data("SELECT * FROM tb_data");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a href="tambah.php">Tambah data</a>

    <br>
    <br>

    <table border="1" cellspacing="0" width="300px">
        <tr>
            <td>Nama</td>
            <td>no</td>
            <td>action</td>
        </tr>

        <?php foreach ($data as $row) : ?>

            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['no'] ?></td>
            </tr>

        <?php endforeach ?>

    </table>

</body>

</html>