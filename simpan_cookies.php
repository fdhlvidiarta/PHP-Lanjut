<?php
    // Mengambil data dari form dan menyimpan dalam cookie
    $expire = time() + (86400 * 30); // Cookie berlaku selama 30 hari
    setcookie("nama", $_POST["nama"], $expire);
    setcookie("email", $_POST["email"], $expire);
    setcookie("gender", $_POST["gender"], $expire);
    // Redirect ke halaman tampilan data
    header("Location: cookies.php");
    exit();

