<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous à venir - Patient</title>
    <link rel="stylesheet" href="style/rdv.css">
</head>
<body>

    <!-- En-tête principale avec informations du patient et actions -->
    <header class="doctor-header">
        <!-- Informations du patient -->
        <div class="doctor-info">
            <p><strong>Nom du Patient :</strong> Ibrahim SAOU</p>
            <p><strong>N° Téléphone :</strong> 07729893921</p>
            <p><strong>Email :</strong> test@gmail.com </p>
        </div>

        <!-- Titre principal -->
        <div class="title-container">
            <h1 class="main-title">RDV à Venir</h1>
        </div>

        <!-- Logo, bouton Log Out, et actions -->
        <div class="header-actions">
            <img src="media/logo.png" alt="Logo DoctoRDV" class="doctor-logo">
            <a href="main.php" class="logout-button">Log Out</a>
        </div>
    </header>

    <!-- Boutons RDV Passés et Nouveau RDV -->
    <div class="actions-container">
        <a href="rdv_passes_patient.php" class="action-button">RDV Passés</a>
        <a href="new_rdv_patient.php" class="action-button">Nouveau RDV</a>
    </div>

    <!-- Section des rendez-vous -->
    <main>
        <div class="appointments">
            <div class="appointment-card">
                <p><strong>Date :</strong> 2025-01-06</p>
                <p><strong>Heure :</strong> 09:00 - 10:00</p>
                <p><strong>Médecin :</strong> Dr. Alice Smith</p>
                <p><strong>Spécialité :</strong> Cardiologie</p>
                <button class="cancel-button">Annuler le RDV</button>
            </div>

            <div class="appointment-card">
                <p><strong>Date :</strong> 2025-01-06</p>
                <p><strong>Heure :</strong> 10:00 - 11:00</p>
                <p><strong>Médecin :</strong> Dr. Robert Brown</p>
                <p><strong>Spécialité :</strong> Neurologie</p>
                <button class="cancel-button">Annuler le RDV</button>
            </div>

            <div class="appointment-card">
                <p><strong>Date :</strong> 2025-01-06</p>
                <p><strong>Heure :</strong> 11:00 - 12:00</p>
                <p><strong>Médecin :</strong> Dr. Emily Davis</p>
                <p><strong>Spécialité :</strong> Dermatologie</p>
                <button class="cancel-button">Annuler le RDV</button>
            </div>
        </div>
    </main>
</body>
</html>
