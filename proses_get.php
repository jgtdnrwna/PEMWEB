<?php
    $nama = $_GET['nama'];
    $no_surat = $_GET['no_surat'];
    $tempat_lahir = $_GET['tempat_lahir'];
    $tanggal_lahir = $_GET['tanggal_lahir'];
    $alamat = $_GET['alamat'];
    $no_telepon = $_GET['no_telepon'];
    $email = $_GET['email'];
    $tanggal_permohonan = $_GET['tanggal_permohonan'];
    $tanggal_pelaksanaan = $_GET['tanggal_pelaksanaan'];
    $lama_kegiatan = $_GET['lama_kegiatan'];
    $judul_penelitian = $_GET['judul_penelitian'];

    echo "<h2>Form Pendaftaran Magang</h2>";
    echo "Nama : $nama<br/>";
    echo "No. Surat Dari Instansi/Perguruan TInggi : $no_surat<br/>";
    echo "Tempat Lahir : $tempat_lahir<br/>";
    echo "Tanggal Lahir : $tanggal_lahir<br/>";
    echo "Alamat : $alamat<br/>";
    echo "No. Telepon : $no_telepon<br/>";
    echo "E-mail : $email<br/>";
    echo "Tanggal Permohonan : $tanggal_permohonan<br/>";
    echo "Tanggal Pelaksanaan : $tanggal_pelaksanaan<br/>";
    echo "Lama Kegiatan : $lama_kegiatan<br/>";
    echo "Judul Penelitian : $judul_penelitian<br/>";
?>