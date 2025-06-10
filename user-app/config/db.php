<?php
# Arquivo de conexão com banco de dados
$host = 'localhost';
$db   = 'user_app';
$user = 'root';
$pass = ''; // sua senha

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
