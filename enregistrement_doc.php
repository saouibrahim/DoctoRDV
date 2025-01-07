<?php
// Connexion à la base de données
$host = 'localhost';
$dbname = 'doctordv';
$user = 'postgres';
$password = 'postgres';

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
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement Docteur</title>
    <link rel="stylesheet" href="style/enregistrement.css">
</head>
<body>
    <div class="register-container">
        <img src="media/logo.png" alt="Logo DoctoRDV" class="register-logo">
        <h1>Page d'Enregistrement</h1>
        <button class="role-indicator">Docteur</button>
        <form action="rdv_doc.php" method="post">
            <div class="register-grid">
                <input type="text" name="nom" placeholder="Nom" class="register-input" required>
                <input type="text" name="prenom" placeholder="Prénom" class="register-input" required>
                <input type="text" name="code_postal" placeholder="Code Postal" class="register-input" required>
                <input type="tel" name="telephone" placeholder="N° Téléphone" class="register-input" required>
                <input type="email" name="email" placeholder="Email" class="register-input" required>
                <input type="email" name="email_confirmation" placeholder="Confirmation Email" class="register-input" required>
                <select name="specialite" class="register-input" required>
                    <option value="" disabled selected>Choisir une spécialité</option>
                    <?php foreach ($specialites as $specialite): ?>
                        <option value="<?= htmlspecialchars($specialite) ?>">
                            <?= htmlspecialchars($specialite) ?>
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
