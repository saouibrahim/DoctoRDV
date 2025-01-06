<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification Patient</title>
    <link rel="stylesheet" href="style/authentification.css">
    <?php include 'includes/bootstrap.php'; ?>
</head>
<body>
    <div class="auth-container">
        <img src="media/logo.png" alt="Logo DoctoRDV" class="auth-logo">
        <h1>Page d'Authentification</h1>
        <button class="role-indicator">Patient</button>
        <input type="email" name="email" placeholder="Email" class="auth-input" required>
        <input type="password" name="password" placeholder="Mode de Passe" class="auth-input" required>
        <a href="rdv_patient.php" type="submit" class="auth-button">Login</a>
        <a href="enregistrement_patient.php" class="auth-link">Sign Up</a>
    </div>
</body>
</html>
