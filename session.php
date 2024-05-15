<?php
  session_start();
  $errorMessage = "";

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "panskie" && $password === "123") {
      // Login sukses
      $_SESSION['username'] = $username; 
      header("Location: selamatDatang.php"); 
      exit();
    } else {
      // Login gagal
      $errorMessage = "username dan password salah.";
    }
  }
  try {
    if ($_SERVER["REQUEST_METHOD"] != "POST") {
        throw new Exception("Invalid request method");
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "fdhl" && $password === "0123") {
        $_SESSION["username"] = $username;
      
        header("Location: selamatDatang.php");
        exit();
    } else {
        throw new Exception("Invalid username or password");
    }
  } catch (Exception $e) {
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
<h1>Login session</h1>
<form method="post">
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username" required><br><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" required><br><br>

  <input type="submit" name="submit" value="Login">
</form>

<?php
  if ($errorMessage) {
    echo "<p style='color: red;'>Error: " . $errorMessage . "</p>";
  }
?>

