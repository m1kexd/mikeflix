<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<body>
    <h2>Painel</h2>
    <p>Bem-vindo, <?php echo $_SESSION['username']; ?>!</p>
    <a href="logout.php">Logout</a>
</body>
</html>
