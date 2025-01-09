<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Pendaftaran Anak Berenang</title>
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Anak Berenang</h1>
        <form action="proses_pendaftaran.php" method="POST">
            <label for="nama_anak">Nama Anak:</label>
            <input type="text" id="nama_anak" name="nama_anak" required>

            <label for="umur">Umur:</label>
            <input type="number" id="umur" name="umur" min="1" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat">

            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="tel" id="nomor_telepon" name="nomor_telepon">

            <label for="riwayat_penyakit">Riwayat Penyakit:</label>
            <input id="riwayat_penyakit" name="riwayat_penyakit" rows="4">

            <button type="submit">Daftar</button>
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </form>
    </div>
</body>
</html>
