<?php

$conn = new mysqli('localhost', 'root', '', 'pendaftaran_berenang');

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if the username already exists
    $checkUsername = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkUsername);

    if ($result->num_rows > 0) {
        // Username already exists
        ?>
        <script>
            alert("Akun sudah terdaftar. Silakan gunakan username lain.");
            window.location.href = "register.php"; // Redirect back to the register page
        </script>
        <?php
    } else {
        // Insert the new user
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            ?>
            <script>
                alert("Akun berhasil dibuat");
                window.location.href ="daftar.php";
            </script>
            <?php
        } else {
            echo "Error: ". $sql. "<br>". $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
    <script>
        function togglePassword() {
            var passwordField = document.getElementById("password");
            passwordField.type = passwordField.type === "password" ? "text" : "password";
        }
    </script>
</head>
<body>
    <div class="container">
        <form method="POST" action="">
            <h2>Sign Up</h2>
            <input placeholder="E-Mail" class="regis" type="text" name="username" required>
            <input placeholder="Buat Password" class="regis" type="password" id="password" name="password" required>
            <p>
                Show Password
                <input type="checkbox" onclick="togglePassword()">
            </p>
            <button type="submit">Lanjut </button>
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
        </form>
    </div>
</body>
</html>
