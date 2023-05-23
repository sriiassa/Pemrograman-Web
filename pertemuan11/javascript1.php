<?php
    $data['nama']        = "Kadek Sri Dwi Wijayanti";
    $data['alamat']      = "Jl. Cokroaminoto Gang Berlian No.10";
    $data['prodi']       = "Teknik Informatika";
    $data['jurusan']     = "Manajemen Data dan Informasi";
    $data['tgl_lahir']   = "2004-07-29";


    echo json_encode($data);
    header("Content-Type: application/json; charset=utf-12");