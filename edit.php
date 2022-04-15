<?php

require_once 'fungsi.php';

$id = $_GET['id'];

$row = show_data("SELECT * FROM tb_data WHERE id_data = '" . $id . "' ");

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

    <form action="" method="post">

        <label for="">Nama</label>
        <input type="text" name="nama" id="nama" value="<?= $row['nama'] ?>">

        <label for="">No</label>
        <input type="text" name="no" id="" value="<?= $row['no'] ?>">

        <button type="submit" name="submit">Submit</button>

    </form>

    <ol>
        <li>
            <a href="index.php">Kembali</a>
        </li>
    </ol>

</body>

</html>