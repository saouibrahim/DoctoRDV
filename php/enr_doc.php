
<?php
session_start();
require_once 'php/utils/db.php';

$error = '';

// Récupération des spécialités
$specialites = [];
try {
    $stmt = $pdo->query("SELECT id, name FROM SPECIALIZATION");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $specialites[$row['id']] = $row['name'];
    }
} catch (PDOException $e) {
    die("Erreur lors de la récupération des spécialités : " . $e->getMessage());
}

$error = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $email_confirmation = $_POST['email_confirmation'] ?? '';
    $specialization_id = $_POST['specialite'] ?? '';

    // Vérifications de base
    if ($email !== $email_confirmation) {
        $error = "Les emails ne correspondent pas.";
    } elseif (!isset($specialites[$specialization_id])) {
        $error = "La spécialité choisie n'est pas valide.";
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
            try {
                $stmt = $pdo->prepare("
                    INSERT INTO DOCTORS (firstname, lastname, email, phone, password, postcode, specialization_id) 
                    VALUES (:firstname, :lastname, :email, :phone, :password, :postcode, :specialization_id)
                ");
                $stmt->bindParam(':firstname', $_POST['prenom']);
                $stmt->bindParam(':lastname', $_POST['nom']);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':phone', $_POST['telephone']);
                $stmt->bindParam(':password', $_POST['password']);
                $stmt->bindParam(':postcode', $_POST['code_postal']);
                $stmt->bindParam(':specialization_id', $specialization_id);

                if ($stmt->execute()) {
                    header("Location: rdv_doc.php");
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