<?php
include 'config/database.php';

if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $asal = $_POST['asal'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $agama = $_POST['agama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];

    if (strlen($nisn) !== 10) {
        echo "<script>alert('NISN harus terdiri dari 10 digit.'); window.history.back();</script>";
        exit();
    }

    // Validasi nomor HP
    if (strlen($hp) < 11 || strlen($hp) > 13) {
        echo "<script>alert('Nomor HP harus terdiri dari 11 hingga 13 digit.'); window.history.back();</script>";
        exit();
    }


    // Cek data sudah kedaftar
    $check_nisn = mysqli_query($db, "SELECT * FROM pendaftaran WHERE nisn = '$nisn'");
    if (mysqli_num_rows($check_nisn) > 0) {
        echo "<script>alert('NISN sudah terdaftar.'); window.history.back();</script>";
        exit();
    }

    
    $check_hp = mysqli_query($db, "SELECT * FROM pendaftaran WHERE no_hp = '$hp'");
    if (mysqli_num_rows($check_hp) > 0) {
        echo "<script>alert('Nomor HP sudah terdaftar.'); window.history.back();</script>";
        exit();
    }

    
    $check_email = mysqli_query($db, "SELECT * FROM pendaftaran WHERE email = '$email'");
    if (mysqli_num_rows($check_email) > 0) {
        echo "<script>alert('Email sudah terdaftar.'); window.history.back();</script>";
        exit();
    }

    $getMaxId = mysqli_query($db, "SELECT MAX(RIGHT(id_siswa, 5)) AS id FROM pendaftaran");
    $d = mysqli_fetch_object($getMaxId);
    $generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);

    $sql = "INSERT INTO pendaftaran (id_siswa, nisn, nama_lengkap, asal_sekolah, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat, no_hp, agama, email, prodi) VALUES ('$generateId', '$nisn','$nama', '$asal', '$tpt_lahir', '$tgl_lahir', '$jk', '$alamat', '$hp', '$agama', '$email', '$jurusan')";

    if($db->query($sql)){
        $message = "Selamat data anda sudah di tambahkan, gunakan id login berikut untuk login: $generateId";
        echo "<script>
                alert('$message');
                window.location.href='dashboard-admin.php';
              </script>";
        exit();
    } else {
        echo "Terjadi kesalahan saat mendaftar.";
    }
}

?>

