<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Enregistrement - Patient</title>
    <link rel="stylesheet" href="style/enregistrement.css">
</head>
<body>
    <?php include 'php/enr_pat.php' ?>
    <div class="register-container">
        <img src="media/logo.png" alt="Logo" class="register-logo">
        <h1>Page d'Enregistrement</h1>
        <div class="role-indicator">Patient</div>
        <?php if ($error): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="register-grid">
                <input type="text" name="nom" placeholder="Nom" class="register-input" required>
                <input type="text" name="prenom" placeholder="Prénom" class="register-input" required>
                <input type="tel" name="telephone" placeholder="N° Téléphone" class="register-input" pattern="\d{10}" title="Le numéro de téléphone doit contenir exactement 10 chiffres." required>
                <input type="email" name="email" placeholder="Email" class="register-input" required>
                <input type="email" name="email_confirmation" placeholder="Confirmation Email" class="register-input" required>
                <input type="password" name="password" placeholder="Mot de Passe" class="register-input" required>
            </div>
            <button type="submit" class="register-button">Sign Up</button>
        </form>
        <a href="authentification_Patient.php" class="register-link">Already Signed Up</a>
    </div>
</body>
</html>
