<?php

// Database connection parameters

const DB_USER = 'postgres';
const DB_PASSWORD = 'postgres';
const DB_NAME = 'doctordv';
const DB_SERVER = '127.0.0.1';
const DB_PORT = '5432';


function executeRequest($request) {
    global $host, $dbname, $user, $password;
    $user = DB_USER;
    $password = DB_PASSWORD;

    try {
        $dsn = 'pgsql:dbname='.DB_NAME.';host='.DB_SERVER.';port='.DB_PORT;
        

        $pdo = new PDO($dsn,$user,$password);

        $stmt = $pdo->prepare($request);
        $stmt->execute();

        return $stmt;
    } catch (PDOException $e) {
        return ["error" => $e->getMessage()];
    }
}


$result = executeRequest('SELECT * FROM patients');

foreach ($result as $row) {
    echo $row['firstname'].'<br>';
}

?>
