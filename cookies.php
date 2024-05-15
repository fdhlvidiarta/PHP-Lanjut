<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Identitas cookies</title>
</head>
<body>
<h1>Masukkan Nama, Email dan Jenis Kelamin</h1>
    <form action="simpan_cookies.php" method="post">
        Nama: <input type="text" name="nama" required><br>
        Email: <input type="email" name="email" required><br>
        Jenis Kelamin:
        <input type="radio" name="gender" value="Laki-laki" required>Laki-laki
        <input type="radio" name="gender" value="Perempuan" required>Perempuan<br>
        <input type="submit" value="Simpan">
    </form>
    <hr>
<h1>Data Identitas Saya</h1>
    <?php if(isset($_COOKIE["nama"])): ?>
        Selamat datang <b><?php echo htmlspecialchars($_COOKIE["nama"]); ?></b> <br>
        Email: <?php echo htmlspecialchars($_COOKIE["email"]); ?> <br>
        Jenis Kelamin: <?php echo htmlspecialchars($_COOKIE["gender"]); ?><br>
    <?php else: ?>
        <p>Data tidak ditemukan. Silakan <a href="cookies.php">isi formulir ini</a> terlebih dahulu.</p>
    <?php endif; ?>
</body>
</html>
