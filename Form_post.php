?php
    $nama = $_POST['nama'];
    $no_surat = $_POST['no_surat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $tanggal_permohonan = $_POST['tanggal_permohonan'];
    $tanggal_pelaksanaan = $_POST['tanggal_pelaksanaan'];
    $lama_kegiatan = $_POST['lama_kegiatan'];
    $judul_penelitian = $_POST['judul_penelitian'];

    echo "<h2>Form Pendaftaran Magang</h2>";
    echo "Nama : $nama<br>";
    echo "No. Surat Dari Instansi/Perguruan TInggi : $no_surat<br>";
    echo "Tempat Lahir : $tempat_lahir<br>";
    echo "Tanggal Lahir : $tanggal_lahir<br>";
    echo "Alamat : $alamat<br>";
    echo "No. Telepon : $no_telepon<br>";
    echo "E-mail : $email<br>";
    echo "Tanggal Permohonan : $tanggal_permohonan<br>";
    echo "Tanggal Pelaksanaan : $tanggal_pelaksanaan<br>";
    echo "Lama Kegiatan : $lama_kegiatan<br>";
    echo "Judul Penelitian : $judul_penelitian<br>";
?>