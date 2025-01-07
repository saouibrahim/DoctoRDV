<?php
session_start();
require_once 'php/utils/db.php';

$error = '';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

// Récupération des spécialités
$specialites = [];
try {
    $stmt = $pdo->query("SELECT name FROM SPECIALIZATION");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $specialites[] = $row['name'];
    }
} catch (PDOException $e) {
    die("Erreur lors de la récupération des spécialités : " . $e->getMessage());
}

$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $email_confirmation = $_POST['email_confirmation'] ?? '';

    if ($email !== $email_confirmation) {
        $error = "Les emails ne correspondent pas.";
    } else {
        // Vérification si l'email existe déjà dans la base de données
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM DOCTORS WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $emailExists = $stmt->fetchColumn();

        if ($emailExists) {
            $error = "Cet email est déjà utilisé.";
        } else {
            // Enregistrement dans la base de données
            $stmt = $pdo->prepare("INSERT INTO DOCTORS (firstname, lastname, email, phone, password, postcode, specialization_id) VALUES (:firstname, :lastname, :email, :phone, :password, :postcode, :specialization_id)");
            $stmt->bindParam(':firstname', $_POST['prenom']);
            $stmt->bindParam(':lastname', $_POST['nom']);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $_POST['telephone']);
            $stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
            $stmt->bindParam(':postcode', $_POST['code_postal']);
            $stmt->bindParam(':specialization_id', $_POST['specialite']);
            $stmt->execute();

            header("Location: rdv_doc.php");
            exit;
        }
    }
}
?>
