<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$query = "INSERT INTO kontak (nama, email, pesan)
          VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($koneksi, $query)) {
    echo "Pesan berhasil dikirim!";
} else {
    echo "Pesan gagal dikirim: " . mysqli_error($koneksi);
}
?>