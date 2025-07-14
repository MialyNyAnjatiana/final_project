<?php
include('../inc/fonctions.php');
session_start();
$objet = getObjet($_GET['id']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link href="../assets/img/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <title>Emprunt d'objet</title>
    <?php
    include('../inc/header.php');
    ?>
</head>

<body style="margin: 10px;">

    <span class="text-center">
        <span class="titre">
            <div style="margin: 50px;">
                <span class="titre text-center">
                    <h1>Formulaire d'emprunt</h1>
                </span>

                <form action="../inc/traitementEmprunt.php" method="get">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']) ?>">
                    <p>
                        <label for="name">Nom de l'objet</label>
                        <h5 class="text-muted"><?= htmlspecialchars($objet['nom_objet']) ?></h5>
                    </p>

                    <p>
                        <label for="departement">Durée de l'emprunt </label>
                        <input type="number" name="duree" value="1" placeholder="Durée d'emprunt (en jours)" min="1" required>
                    </p>

                    <input type="submit" class="btn btn-outline-primary" value="Emprunter l'objet">
                </form>
            </div>
        </span>
        <?php include('../inc/footer.php'); ?>
</body>

</html>