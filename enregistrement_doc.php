<!-- 
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
 -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement Docteur</title>
    <link rel="stylesheet" href="style/enregistrement.css">
</head>
<body>
    <?php include 'php/auth_doc.php' ?>

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
