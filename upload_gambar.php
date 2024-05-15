<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload file gambar</title>
    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="{233307047}">
    <meta name="author" content="{Fadhil Vidiarta}">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
    <p><label>Pilih Gambar yang akan di upload: </label><br>
    <input type="file" name="gambar" value="Pilih Gambar" id="gambar1"></p>
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // cek apakah ada kiriman data dengan metode post
    if (isset($_POST["submit"])) {
        // cek apakah file berupa gambar
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
        if ($check !== false) {
            echo "File berupa citra/gambar - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.<br>";
            $uploadOk = 0;
        }
        
        // cek jika file sudah ada
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.<br>";
            $uploadOk = 0;
        }
        
        // cek ukuran file
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, file anda terlalu besar untuk di upload.<br>";
            $uploadOk = 0;
        }
        
        // filter format
        if ($tipeGambar != "jpg" && $tipeGambar != "png" && $tipeGambar != "jpeg" && $tipeGambar != "gif") {
            echo "Sorry, hanya JPG, JPEG, PNG & GIF.<br>";
            $uploadOk = 0;
        }
        
        // cek jika $uploadOk bernilai 0
        if ($uploadOk == 0) {
            echo "Sorry, File anda gagal upload.<br>";
        } else {
            // proses upload file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "file " . htmlspecialchars(basename($_FILES["gambar"]["name"])) . "Berhasil Upload.<br>";
            } else {
                echo "Sorry, ada error saat upload.<br>";
            }
        }
    }
}
?>

</body>
</html>
