<!-- bagian php non oop -->
<?php
// Koneksi ke database
session_start();
$conn = new mysqli('localhost', 'root', '', 'pendaftaran_berenang');
//jika koneksi tidak berhasil maka:
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$error_message = "";
//username dan password meminta dari method POST yang terletak pada html 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
//akan mengambil dari lokasi spesifik data yang telah dibuat di mysqli(phpmyadmin)
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Simpan informasi pengguna dalam database
            $_SESSION['username'] = $username;
            // setelah proses login user akan diarahkan menu.php
            header("Location: menu.php");
            //exit berfungsi agar saat user sudah melakukan login maka user akan otomatis kelar dan menuju halaman selanjutnya
            exit();
        } else {
            //jika user memasukan password invalid maka user akan mendapat notifikasi "Password salah.";
            $error_message = "Password salah."; 
        }
    } else {
        //jika user login dengan akun yang tidak terdafat maka akan user mendapat notifikasi "Username tidak ditemukan."
        $error_message = "Username tidak ditemukan.";
    }
}
?>
<!-- Bagian HTML untuk memperindah tampilan -->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- html yang terhubung ke css -->
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
    <script>
        //java script yang berfungsi untuk toggle menampilkan password yang dituliskan "*" yang terhubung ke type masing-masing
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
    <script>
        //fungsi JS agar menampilkan user belum mengisi username dan password
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>
<?php
 //fungsi JS agar menampilkan akun user yang belum terregistrasi atau belumpunya akun
    if ($error_message != "") {
        echo "<script>showAlert('$error_message');</script>";
    }
    ?>
    <!-- bisa disebut bagian yang akan terhubung ke PHP atau CSS -->
    <form method="POST" action="">
    <h2>Login</h2>
    <!-- bagian untuk tampilan yang terdapat sublass dari class post yang bisa saja terhubung ke PHP atau CSS -->
    <!-- tampilan input box agar lebih enak dilihat user -->
        <input placeholder="Username" class="login" type="text" name="username" required>
        <input placeholder="Password" class="login" type="password" id="password" name="password" required>
        <p>Show Password
    <!-- togglepassword yang terhbung ke javascript yang akan menampilkan password yang tersembunyi/tak nampak -->
        <input class="sp" type="checkbox" onclick="togglePassword()"></p>
    <!-- tombol login -->
        <button type="submit">Login</button><br>
        <p>Belum punya akun? <a href="register.php">Register di sini</a></p>
    </form>
    <?php
    if ($error_message != "") {

    }
    ?>
    
</body>
</html>

