<?php
$servername = "localhost"; 
$username = "root"; // Ganti dengan 'root' 
$password = "";     // Kosongkan jika tidak ada kata sandi
$dbname = "pendaftaran_berenang"; // Ganti dengan nama database kamu

// Membuat koneksi
$conn = new mysqli ($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama_anak = $_POST['nama_anak'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$nomor_telepon = $_POST['nomor_telepon'];
$riwayat_penyakit = $_POST ['riwayat_penyakit'];
$tanggal_pendaftaran = date("Y-m-d");

// Menyimpan data ke database
$sql = "INSERT INTO dbdaftar (nama_anak, umur, jenis_kelamin, alamat, nomor_telepon, tanggal_pendaftaran, riwayat_penyakit)
VALUES ('$nama_anak', '$umur', '$jenis_kelamin', '$alamat', '$nomor_telepon', '$tanggal_pendaftaran','$riwayat_penyakit')";

if ($conn->query($sql) === TRUE) {
    ?>
<!-- javascript sebagai notifkasi jika akun berhasil dibuat dan user akan diarahkan ke menu -->
     <script>
         alert("Akun berhasil dibuat");
         window.location.href ="register.php";
     </script>
     <?php
     //berfungsi untuk menampilkan jika error dari variabel sql dan conn error
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
