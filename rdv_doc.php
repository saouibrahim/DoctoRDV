<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous à venir - Docteur</title>
    <link rel="stylesheet" href="style/rdv.css">
</head>
<body>
    <!-- En-tête principale avec informations du docteur et actions -->
    <header class="doctor-header">
        <!-- Informations du docteur -->
        <div class="doctor-info">
            <p><strong>Nom du Docteur :</strong> Dr. John Doe</p>
            <p><strong>N° Téléphone :</strong> 123-456-7890</p>
            <p><strong>Spécialité :</strong> Cardiologie</p>
            <p><strong>Établissement :</strong> Downtown Clinic</p>
        </div>

        <!-- Titre principal -->
        <div class="title-container">
            <h1 class="main-title">RDV à Venir</h1>
        </div>

        <!-- Logo, bouton Log Out -->
        <div class="header-actions">
            <img src="media/logo.png" alt="Logo DoctoRDV" class="doctor-logo">
            <a href="main.html" class="logout-button">Log Out</a>
        </div>
    </header>

    <!-- Boutons RDV Passés -->
    <div class="actions-container">
        <a href="rdv_passes_doc.html" class="action-button">RDV Passés</a>
    </div>

    <!-- Section des rendez-vous -->
    <main>
        <div class="appointments">
            <div class="appointment-card">
                <p><strong>Date :</strong> 2025-01-06</p>
                <p><strong>Heure :</strong> 09:00 - 10:00</p>
                <p><strong>Patient :</strong> Liam Martinez</p>
                <p><strong>Spécialité :</strong> Cardiologie</p>
                <button class="cancel-button">Annuler le RDV</button>
            </div>

            <div class="appointment-card">
                <p><strong>Date :</strong> 2025-01-06</p>
                <p><strong>Heure :</strong> 10:00 - 11:00</p>
                <p><strong>Patient :</strong> Noah Garcia</p>
                <p><strong>Spécialité :</strong> Neurologie</p>
                <button class="cancel-button">Annuler le RDV</button>
            </div>

            <div class="appointment-card">
                <p><strong>Date :</strong> 2025-01-06</p>
                <p><strong>Heure :</strong> 11:00 - 12:00</p>
                <p><strong>Patient :</strong> William Rodriguez</p>
                <p><strong>Spécialité :</strong> Dermatologie</p>
                <button class="cancel-button">Annuler le RDV</button>
            </div>
        </div>
    </main>
</body>
</html>
