<?php

require_once 'fungsi.php';

if (isset($_POST['submit'])) {
    # code...
    if (add_data($_POST) > 0) {
        # code...
        header("location:index.php");
    } else {
        # code...
        echo "gagal";
    }
}

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
        <input type="text" name="nama" id="nama">

        <label for="">No</label>
        <input type="text" name="no" id="">

        <button type="submit" name="submit">Submit</button>

    </form>

</body>

</html>