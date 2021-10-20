<html>
    <head>
        <title>Form Post</title>
    </head>
    <body>
        <h2>Form Pendaftaran Magang</h2>
        <form action="proses_post.php" method="POST">
            <table>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>no_surat</td>
                    <td>:</td>
                    <td><input type="text" name="no_surat"></td>
                </tr>
                <tr>
                    <td>tempat_lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>tanggal_lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>no_telpon</td>
                    <td>:</td>
                    <td><input type="text" name="no_telpon"></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>tanggal_permohonan</td>
                    <td>:</td>
                    <td><input type="text" name="tanggal_permohonan"></td>
                </tr>
                <tr>
                    <td>tanggal_pelaksanaan</td>
                    <td>:</td>
                    <td><input type="text" name="tanggal_pelaksanaan"></td>
                </tr>
                <tr>
                    <td>lama_kegiatan</td>
                    <td>:</td>
                    <td><input type="text" name="lama_kegiatan"></td>
                </tr>
                <tr>
                    <td>judul_penelitian</td>
                    <td>:</td>
                    <td><input type="text" name="judul_penelitian"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" name="simpan" value="simpan"/><br/>
                </tr>
        </form>
    </body>
</html>