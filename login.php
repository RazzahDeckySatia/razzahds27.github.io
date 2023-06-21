<?php
session_start();

// Periksa apakah pengguna sudah login atau belum
if (isset($_SESSION['username'])) {
    header('Location: register.php');
    exit();
}

// Periksa apakah ada pengiriman data form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lakukan validasi form dan verifikasi login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh validasi sederhana, pastikan username dan password diisi
    if (!empty($username) && !empty($password)) {
        // Verifikasi login di sini (misalnya, dengan menghubungkan ke database)
        // Jika login berhasil, atur variabel session dan alihkan ke halaman index.php
        // Jika login gagal, tampilkan pesan error
        // Contoh sederhana tanpa verifikasi sebenarnya:
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit();
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
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
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
        <button type="submit">Login</button>
    </form>
</body>
</html>
