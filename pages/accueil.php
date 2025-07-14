<?php
include('../inc/fonctions.php');
session_start();

$categories = getCategories();
if (isset($_GET['cat']) && $_GET['cat'] != "") {
    $cat = $_GET['cat'];
    $object = filtreObjetCategorie($cat);
} else {
    $object = getListeObjet();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link href="../assets/img/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Accueil</title>
</head>

<body>
    <?php include('../inc/header.php') ?>
    
    <h1>Liste des objets</h1>

    <form action="accueil.php" method="get" class="row g-3">
        <span>
            <label for="categorie">Categorie</label>
            <select name="cat" class="form-select">
                <option value="">Tous</option>
                <?php foreach ($categories as $c): ?>
                    <option value="<?= htmlspecialchars($c['id_categorie']) ?>" <?= (isset($cat) && $c['id_categorie'] == $cat) ? 'selected' : '' ?>><?= htmlspecialchars($c['nom_categorie']) ?></option>
                <?php endforeach; ?>
            </select>
        </span>
       <input type="submit" class="btn btn-outline-primary col-2" value="Filtrer">
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Objet</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Propriétaire</th>
                <th scope="col">Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($object as $o): ?>
                <tr>
                    <th scope="row"><?= htmlspecialchars($o['nom_objet']); ?></th>
                    <td><?= htmlspecialchars($o['nom_categorie']) ?></td>
                    <td><?= htmlspecialchars($o['nom_membre']) ?></td>
                    <td>disponible</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>