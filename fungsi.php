<?php

function koneksi()
{
    # code...

    return mysqli_connect('localhost', 'root', '', 'db_fungsi');
}

function show_data($sql)
{
    # code...

    $koneksi = koneksi();

    $query = mysqli_query($koneksi, $sql);

    $data = [];

    while ($row = mysqli_fetch_assoc($query)) {
        $data[] = $row;
    }

    return $data;
}


function add_data($data)
{
    # code...

    $koneksi = koneksi();

    $nama = $data['nama'];
    $no = $data['no'];

    $sql = "INSERT INTO tb_data VALUES(NULL, '" . $nama . "', '" . $no . "')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}
