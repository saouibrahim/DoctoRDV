<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendez-vous Passés - Docteur</title>
    <link rel="stylesheet" href="style/rdv.css">
</head>
<body>
    <!-- En-tête principale avec informations du docteur -->
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
            <h1 class="main-title">RDV Passés</h1>
        </div>

        <!-- Logo et bouton Log Out -->
        <div class="header-actions">
            <img src="media/logo.png" alt="Logo DoctoRDV" class="doctor-logo">
            <a href="main.php" class="logout-button">Log Out</a>
        </div>
    </header>

    <!-- Bouton Revenir -->
    <div class="actions-container">
        <a href="rdv_doc.php" class="action-button">Revenir</a>
    </div>

    <!-- Section des rendez-vous passés -->
    <main>
        <div class="appointments">
            <div class="appointment-card">
                <p><strong>Date :</strong> 2024-12-20</p>
                <p><strong>Heure :</strong> 09:00 - 10:00</p>
                <p><strong>Nom Prénom :</strong> Liam Martinez</p>
                <p><strong>N° Téléphone :</strong> 321-321-3210</p>
                <p><strong>Email :</strong> liammartinez@gmail.com</p>
            </div>

            <div class="appointment-card">
                <p><strong>Date :</strong> 2024-12-20</p>
                <p><strong>Heure :</strong> 10:00 - 11:00</p>
                <p><strong>Nom Prénom :</strong> Noah Garcia</p>
                <p><strong>N° Téléphone :</strong> 654-654-6540</p>
                <p><strong>Email :</strong> noahgarcia@gmail.com</p>
            </div>

            <div class="appointment-card">
                <p><strong>Date :</strong> 2024-12-20</p>
                <p><strong>Heure :</strong> 11:00 - 12:00</p>
                <p><strong>Nom Prénom :</strong> William Rodriguez</p>
                <p><strong>N° Téléphone :</strong> 987-987-9870</p>
                <p><strong>Email :</strong> williamrodriguez@gmail.com</p>
            </div>
        </div>
    </main>
</body>
</html>
