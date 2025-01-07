<?php
session_start();
require_once 'php/utils/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        $query = "SELECT * FROM DOCTORS WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $doctor = $stmt->fetch(PDO::FETCH_ASSOC);

            // Comparaison directe des mots de passe (non cryptés)
            if ($password === $doctor['password']) {
                $_SESSION['doctor_id'] = $doctor['id'];
                $_SESSION['doctor_name'] = $doctor['firstname'] . ' ' . $doctor['lastname'];
                header('Location: rdv_doc.php');
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