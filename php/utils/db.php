<?php
$host = "localhost";
$port = "5432";
$dbname = "doctordv";
$username = "postgres";
$password = "postgres";

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base PostgreSQL : " . $e->getMessage());
}
?>
