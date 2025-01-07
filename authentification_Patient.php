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
                <form method="POST" action="authentification_Patient.php" class="auth-form">
                    <input type="email" name="email" placeholder="Email" class="auth-input" required>
                    <input type="password" name="password" placeholder="Mot de Passe" class="auth-input" required>
                    <?php
                    if (!empty($error_message)) {
                        echo "<div class='text-danger'>$error_message</div>";
                    }
                    ?>
                    <button type="submit" class="auth-button">Login</button>
                </form>
                <a href="enregistrement_patient.php" class="auth-link">Sign Up</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <?php include 'php/auth_pat.php'; ?>

</body>
</html>
