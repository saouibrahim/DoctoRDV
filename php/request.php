<?php

// Database connection parameters
$host = 'localhost';
$dbname = 'doctordv';
$user = 'postgres';
$password = 'postgres';


function executeRequest($request) {
    global $host, $dbname, $user, $password;

    try {
        $dsn = "pgsql:host=$host;dbname=$dbname";
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];

        $pdo = new PDO($dsn, $user, $password, $options);

        $stmt = $pdo->prepare($request);
        $stmt->execute();

        return $stmt->fetchAll();
    } catch (PDOException $e) {
        return ["error" => $e->getMessage()];
    }
}
?>
