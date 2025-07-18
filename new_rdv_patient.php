<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Prendre un RDV - Patient</title>
    <link rel="stylesheet" href="style/new_rdv_patient.css">
</head>
<body>
    <!-- En-tête principale -->
    <header class="doctor-header">
        <!-- Informations du patient -->
        <div class="doctor-info">
            <p><strong>Nom du Patient :</strong> John Doe</p>
            <p><strong>N° Téléphone :</strong> 123-456-7890</p>
            <p><strong>Email :</strong> johndoe@gmail.com</p>
            <p><strong>N° Patient :</strong> P123456</p>
        </div>

        <!-- Titre principal -->
        <div class="title-container">
            <h1 class="main-title">Prendre un RDV</h1>
        </div>

        <!-- Logo et bouton Log Out -->
        <div class="header-actions">
            <img src="media/logo.png" alt="Logo DoctoRDV" class="doctor-logo">
            <a href="main.php" class="logout-button">Log Out</a>
        </div>
    </header>

    <!-- Bouton Revenir -->
    <div class="actions-container">
        <a href="rdv_patient.php" class="action-button">Revenir</a>
    </div>

    <!-- Liste des médecins -->
    <main>
        <div class="appointments-container">
            <!-- Liste des docteurs (depuis la base de données) -->
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. John Doe</p>
                <p><strong>Spécialité :</strong> Cardiologie</p>
                <p><strong>Établissement :</strong> Downtown Clinic</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. Alice Smith</p>
                <p><strong>Spécialité :</strong> Dermatologie</p>
                <p><strong>Établissement :</strong> City Hospital</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. Robert Brown</p>
                <p><strong>Spécialité :</strong> Neurologie</p>
                <p><strong>Établissement :</strong> Suburb Care Center</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. Emily Davis</p>
                <p><strong>Spécialité :</strong> Pédiatrie</p>
                <p><strong>Établissement :</strong> Downtown Clinic</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. James Wilson</p>
                <p><strong>Spécialité :</strong> Cardiologie</p>
                <p><strong>Établissement :</strong> City Hospital</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. Sophia Taylor</p>
                <p><strong>Spécialité :</strong> Dermatologie</p>
                <p><strong>Établissement :</strong> Suburb Care Center</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. Michael Anderson</p>
                <p><strong>Spécialité :</strong> Neurologie</p>
                <p><strong>Établissement :</strong> Downtown Clinic</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. Emma Thomas</p>
                <p><strong>Spécialité :</strong> Pédiatrie</p>
                <p><strong>Établissement :</strong> City Hospital</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. David Moore</p>
                <p><strong>Spécialité :</strong> Cardiologie</p>
                <p><strong>Établissement :</strong> Suburb Care Center</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
            <div class="appointment-row">
                <p><strong>Nom du Médecin :</strong> Dr. Olivia Jackson</p>
                <p><strong>Spécialité :</strong> Dermatologie</p>
                <p><strong>Établissement :</strong> Downtown Clinic</p>
                <a href="new_rdv2_patient.php" class="appointment-button">Prendre RDV</a>
            </div>
        </div>
    </main>
</body>
</html>
