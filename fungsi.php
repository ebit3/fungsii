<?php

function koneksi()
{
    # code...

    $conn = mysqli_connect('localhost', 'root', '', 'db_fungsi') or die(mysqli_error($conn));

    return $conn;
}
