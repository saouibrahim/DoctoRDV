<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement Docteur</title>
    <link rel="stylesheet" href="style/enregistrement.css">
</head>
<body>
    <?php include 'php/enr_doc.php' ?>
    <?php include 'php/en_doc.php' ?>
    <div class="register-container">
        <img src="media/logo.png" alt="Logo DoctoRDV" class="register-logo">
        <h1>Page d'Enregistrement</h1>
        <button class="role-indicator">Docteur</button>

        <!-- Affichage des erreurs -->
        <?php if ($error): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="register-grid">
                <input type="text" name="nom" placeholder="Nom" class="register-input" required>
                <input type="text" name="prenom" placeholder="Prénom" class="register-input" required>
                <input type="text" name="code_postal" placeholder="Code Postal" class="register-input" pattern="\d{5}" title="Le code postal doit contenir exactement 5 chiffres." required>
                <input type="tel" name="telephone" placeholder="N° Téléphone" class="register-input" pattern="\d{10}" title="Le numéro de téléphone doit contenir exactement 10 chiffres." required>
                <input type="email" name="email" placeholder="Email" class="register-input" required>
                <input type="email" name="email_confirmation" placeholder="Confirmation Email" class="register-input" required>
                <select name="specialite" class="register-input" required>
                    <option value="" disabled selected>Choisir une spécialité</option>
                    <?php foreach ($specialites as $id => $name): ?>
                        <option value="<?= htmlspecialchars($id) ?>">
                            <?= htmlspecialchars($name) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <input type="password" name="password" placeholder="Mot de Passe" class="register-input" required>
            </div>
            <button type="submit" class="register-button">Sign Up</button>
        </form>
        <a href="authentification_doc.php" class="register-link">Already Signed Up</a>
    </div>
</body>
</html>
