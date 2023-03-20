<?php

    date_default_timezone_set("Asia/Jakarta");

    $server = '127.0.0.1';
    $database = 'absensi';
    $username = 'root';
    $password = 'hansgans0506';

    $conn = mysqli_connect($server,$username,$password,$database);
    
    $nama = $_POST['nama_lengkap'];
    $no_absen = $_POST['absen'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $tanggal = date('Y-m-d');
    $jam = date("H.i:sa");
    $jam_masuk = '06.45:00';

    $id_jurusan = NULL;
    $keterangan = NULL;

    if($jurusan == 'OTKP'){
        $id_jurusan = "5514";
    } elseif ($jurusan == 'RPL') {
        $id_jurusan = "5880";
    } elseif ($jurusan == 'MM') {
        $id_jurusan = "2232";
    } elseif ($jurusan == 'TKJT') {
        $id_jurusan = "8068";
    } elseif ($jurusan == 'AKL') {
        $id_jurusan = "6127";
    }

    if($jam > $jam_masuk){
        $keterangan = 'TERLAMBAT';
    } else {
        $keterangan = 'TEPAT WAKTU';
    }

    $sql = "INSERT INTO $kelas (nama, no_absen, jurusan, id_jurusan, waktu, tanggal, keterangan) VALUES('$nama','$no_absen','$jurusan','$id_jurusan','$jam','$tanggal','$keterangan')";

    if (mysqli_query($conn, $sql)) {
        header("Location: berhasil.php");
        exit();
    } else {
        echo "<p>" . "Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }

    mysqli_close($conn);
?>