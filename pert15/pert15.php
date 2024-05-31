<?php
session_start(); // Mulai sesi

// Fungsi untuk memeriksa login
function checkLogin($username, $password) {
    // Contoh data pengguna yang disimpan dalam array asosiatif
    $userDatabase = array(
        "ANDIKAWARD" => "ANDIKA123",
    );

    // Memeriksa apakah username ada dalam database dan password cocok
    if (array_key_exists($username, $userDatabase) && $userDatabase[$username] == $password) {
        return true; // Login berhasil
    } else {
        return false; // Login gagal
    }
}

// Jika pengguna sudah login dan memilih logout
if(isset($_GET['logout'])) {
    session_destroy(); // Hancurkan sesi
    header("Location: ".$_SERVER['PHP_SELF']); // Redirect ke halaman ini lagi
}

// Jika pengguna sudah login, tampilkan pesan selamat datang dan tombol logout
if(isset($_SESSION['username'])) {
    echo "Selamat datang, ".$_SESSION['username']."! ";
    echo "<a href='?logout=true'>Logout</a>";
    exit(); // Keluar dari skrip
}

// Memeriksa apakah ada data yang dikirimkan dari form login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Memeriksa login
    if (checkLogin($username, $password)) {
        $_SESSION['username'] = $username; // Simpan nama pengguna dalam sesi
        header("Location: ".$_SERVER['PHP_SELF']); // Redirect ke halaman ini lagi
    } else {
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
