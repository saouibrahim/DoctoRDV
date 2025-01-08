<?php
session_start();
require_once 'php/utils/db.php';

$error = '';
$_SESSION['patient_id'] = 'null';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        $query = "SELECT * FROM PATIENTS WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $patient = $stmt->fetch(PDO::FETCH_ASSOC);

            // Comparaison directe des mots de passe (non cryptés)
            if ($password === $patient['password']) {
                $_SESSION['patient_id'] = $patient['id'];
                $_SESSION['patient_name'] = $patient['firstname'] . ' ' . $patient['lastname'];
                header('Location: rdv_patient.php');
                exit;
            } else {
                $error = 'Mot de passe incorrect.';
            }
        } else {
            $error = 'Email introuvable.';
        }

    } else {
        $error = 'Veuillez remplir tous les champs.';
    }
}
?>