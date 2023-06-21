<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Periksa apakah ada pengiriman data form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lakukan validasi form dan simpan data registrasi
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['password2'];

    // Contoh validasi sederhana, pastikan username, password, dan konfirmasi password diisi
    if (!empty($username) && !empty($password) && !empty($confirmPassword)) {
        // Validasi tambahan dapat dilakukan di sini (misalnya, memeriksa panjang kata sandi, format email, dll.)

        // Contoh validasi sederhana, pastikan password dan konfirmasi password cocok
        if ($password === $confirmPassword) {
            // Simpan data registrasi ke database atau tempat penyimpanan lainnya di sini

            // Atur variabel session dan alihkan ke halaman login.php
            $_SESSION['username'] = $username;
            header('Location: login.php');
            exit();
        } else {
            $error = 'Password dan konfirmasi password tidak cocok!';
        }
    } else {
        $error = 'Mohon isi semua field!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <label for="password2">Confirm Password:</label>
        <input type="password" name="password2" id="password2">
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
