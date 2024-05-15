<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>selamat datang</title>
</head>
<body>
<?php
    session_start();
    if (!isset($_SESSION['username'])) {
    header("Location: session.php"); 
    exit();
    }
    $username = $_SESSION['username'];
?>
  <h1>Selamat Datang <?php echo $username ?></h1>
  <p>Hallo sobat, Anda telah berhasil login.</p>

  <a href="logout.php">Logout</a>
</body>
</html>