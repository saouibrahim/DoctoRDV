<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Enregistrement - Patient</title>
    <link rel="stylesheet" href="style/enregistrement.css">
</head>
<body>
    <div class="register-container">
        <img src="media/logo.png" alt="Logo" class="register-logo">
        <h1>Page d'Enregistrement</h1>
        <div class="role-indicator">Patient</div>
        <div class="register-grid">
            <input type="text" class="register-input" placeholder="Nom">
            <input type="text" class="register-input" placeholder="Prénom">
            <input type="text" class="register-input" placeholder="Téléphone">
            <input type="email" class="register-input" placeholder="Email">
            <input type="email" class="register-input" placeholder="Email Confirmation">
            <input type="password" class="register-input" placeholder="Mode de Passe">
        </div>
        <a href="rdv_passes_patient.php" class="register-button">Sign Up</a>
        <a href="authentification_patient.php" class="register-link">Already Signed Up</a>
    </div>
</body>
</html>
