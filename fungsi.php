<?php

// koneksi
function koneksi()
{
    # code...

    return mysqli_connect('localhost', 'root', '', 'db_fungsi');
}


// tampil data
function show_data($sql)
{
    # code...

    $koneksi = koneksi();

    $query = mysqli_query($koneksi, $sql);

    // jika tampil satu

    if (mysqli_num_rows($query) === 1) {

        # code...
        return mysqli_fetch_assoc($query);
    } else {

        # code...

        $data = [];

        while ($row = mysqli_fetch_assoc($query)) {

            $data[] = $row;
        }

        return $data;
    }
}


// tambah data
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
