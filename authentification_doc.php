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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification Docteur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/authentification.css">
</head>
<body>
    <div class="container-fluid position-relative h-100">
        <a href="main.php" class="btn btn-secondary position-absolute top-0 end-0 m-3 back-button">Retour</a>
        <div class="auth-container-wrapper d-flex justify-content-center align-items-center">
            <div class="auth-container">
                <img src="media/logo.png" alt="Logo DoctoRDV" class="auth-logo">
                <h1>Page d'Authentification</h1>

                <!-- Affichage des erreurs -->
                <?php if ($error): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <!-- Formulaire d'authentification -->
                <form method="POST" action="">
                    <input type="email" name="email" placeholder="Email" class="auth-input" required>
                    <input type="password" name="password" placeholder="Mot de Passe" class="auth-input" required>
                    <button type="submit" class="auth-button">Login</button>
                </form>
                
                <!-- Bouton Sign Up -->
                <form method="GET" action="enregistrement_doc.php">
                    <button type="submit" class="auth-link">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

