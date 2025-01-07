<?php
session_start();
require_once 'php/utils/db.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $email_confirmation = $_POST['email_confirmation'] ?? '';
    $specialization_id = $_POST['specialite'] ?? '';

    // Vérifications de base
    if ($email !== $email_confirmation) {
        $error = "Les emails ne correspondent pas.";
    } else {
        // Vérification si l'email existe déjà dans la base de données
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM PATIENTS WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $emailExists = $stmt->fetchColumn();

        if ($emailExists) {
            $error = "Cet email est déjà utilisé.";
        } else {
            // Enregistrement dans la base de données
            try {
                $stmt = $pdo->prepare("
                    INSERT INTO PATIENTS (firstname, lastname, email, phone, password)
                    VALUES (:firstname, :lastname, :email, :phone, :password)
                ");
                $stmt->bindParam(':firstname', $_POST['prenom']);
                $stmt->bindParam(':lastname', $_POST['nom']);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':phone', $_POST['telephone']);
                $stmt->bindParam(':password', $_POST['password']);
                if ($stmt->execute()) {
                    header("Location: rdv_patient.php");
                    exit;
                } else {
                    $error = "Une erreur s'est produite lors de l'insertion des données.";
                }
            } catch (PDOException $e) {
                $error = "Erreur lors de l'insertion : " . $e->getMessage();
            }
        }
    }
}
?>