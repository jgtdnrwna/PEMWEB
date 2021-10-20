<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>FORM | KKP</title>
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mt-3" style="margin-left: 125px;">
                <img src="logo kkp.jpg" alt="Logo KKP" style="width: 100px;height:100px;">
                <img src="pulau pieh.jpg" alt="Logo KKP" style="width: 100px;height:90px;">
                <img src="pulau anabas.jpg" alt="Logo KKP" style="width: 100px;height:80px;">
            </div>
            <div class="col-md-6 mt-3 text-start nopadding">
                <p><b>Kementrian Kelautan dan Perikanan Direktorat Jenderal Pengelolaan Laut </b><br>
                    Loka Kawasan Konservasi Perairan Nasional (LKKPN) Pekanbaru <br><i>
                        1. Taman Wisata Perairan (TWP) Pulau Pieh dan Laut di Sekitarnya<br>
                        2. Taman Wisata Perairan (TWP) Kepulauan Anambas dan Laut di Sekitarnya</i></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="wrapper">
        <div class="title">
            Form Pendaftaran Kegiatan Magang
        </div>
        <form action="form_post.php" method="POST">
            <table>
                <tr>
                    <td>Nama Pemohon Magang</td>
                    <td><input type="text" name="nama" id="input"></td>
                </tr>
                <tr>
                    <td>No. Surat Dari Instansi/Perguruan TInggi</td>
                    <td><input type="text" name="no_surat"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="textarea" name="alamat"></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td><input type="text" name="no_telepon"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Tanggal Permohonan</td>
                    <td><input type="date" name="tanggal_permohonan"></td>
                </tr>
                <tr>
                    <td>Tanggal Pelaksanaan</td>
                    <td><input type="date" name="tanggal_pelaksanaan"></td>
                </tr>
                <tr>
                    <td>Lama Kegiatan</td>
                    <td><input type="number" name="lama_kegiatan"></td>
                </tr>
                <tr>
                    <td>Judul Penelitian</td>
                    <td><input type="text" name="judul_penelitian"></td>
                </tr>
            </table>
            <br>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Ketentuan</h5>
                    <p class="card-text text-muted">[1]. Dilarang mengambil Material/sampel tanpa seizin pengelola
                        Kawasan Konservasi Perairan; [2]. Dilarang
                        menginjak/merusak biota dan ekosistem di Kawasan Konservasi Perairan; [3]. Dilarang menggunakan
                        peralatan yang merusak biota
                        dan ekosistem perairan; [4]. Pengunjung wajib melaporkan sarana/peralatan yang digunakan; [5].
                        Pengunjung wajib mendapatkan
                        informasi dan pengarahan dari petugas; [6]. Pengunjung wajib mentaati peraturan yang berlaku di
                        Kawasan Konservasi Perairan.</p>
                </div>
            </div><br>
            <div class="inputfield">
                <input type="submit" value="Kirim" id="submit" name="kirim">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>