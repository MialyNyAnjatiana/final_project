<?php
include('../inc/fonctions.php');
session_start();
$listeObjet = getListeObjet();
$categorie = getCategorieObjet();
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
    <title>Ajout objet</title>
    <?php
    include('../inc/header.php');
    ?>
</head>

<body style="margin: 10px;">

    <span class="text-center">
        <span class="titre">
            <div style="margin: 50px;">
                <span class="titre text-center">
                    <h1>Formulaire d'ajout d'objet</h1>
                </span>

                <form action="../inc/traitementAjout.php" method="get">

                    <p>
                        <label for="name">Nom de l'objet</label>
                        <input type="texte" name="nom" value="">
                    </p>

                    <p>
                        <label for="departement">Choisir une catégorie </label>
                        <select name="categorie">
                            <?php foreach ($categorie as $c): ?>
                                <option value="<?= htmlspecialchars($c['id_categorie']) ?>"><?= htmlspecialchars($c['nom_categorie']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </p>

                    <input type="submit" class="btn btn-outline-primary" value="Ajouter l'objet">
                </form>
            </div>
        </span>
        <?php include('../inc/footer.php'); ?>
</body>

</html>