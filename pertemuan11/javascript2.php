<?php
    $data[0]['nama']        = "Kadek Sri Dwi Wijayanti";
    $data[0]['alamat']      = "Jl. Cokroaminoto No.10";
    $data[0]['prodi']       = "Teknik Informatika";
    $data[0]['jurusan']     = "Manajemen Data dan Informasi";
    $data[0]['tgl_lahir']   = "2004-07-29";
    
    $data[1]['nama']        = "Komang Yoga Sri Krisna Jayanta";
    $data[1]['alamat']      = "Jl. Antasura No.8";
    $data[1]['prodi']       = "Teknik Informatika";
    $data[1]['jurusan']     = "Rekayasa Perangkat Lunak";
    $data[1]['tgl_lahir']   = "2007-08-24";

    $data[2]['nama']        = "Gede Mangku Sriwijaya";
    $data[2]['alamat']      = "Jl. Raya Lukluk No.12";
    $data[2]['prodi']       = "Teknik Informatika";
    $data[2]['jurusan']     = "Komputer Akuntasi dan Bisnis";
    $data[2]['tgl_lahir']   = "1999-01-11";

    echo json_encode($data);
    header("Content-Type: application/json; charset=utf-12");