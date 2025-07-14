<?php
include('../inc/fonctions.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link href="../assets/img/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Rechercher des objets</title>
</head>

<body>
    <header class="header">
        <?php include('../inc/header.php'); ?>
    </header>

    <main class="container text-center">
        <section class="title">
            <h2>Rechercher</h2>
        </section>

        <form class="form" action="resultat.php" method="get" class="row g-3">
            <p>
                <label for="">Catégories</label>
                <select name="cat">
                    <?php foreach ($categories as $c): ?>
                        <option value="<?= htmlspecialchars($c['id_categorie']) ?>" <?= (isset($cat) && $c['id_categorie'] == $cat) ? 'selected' : '' ?>><?= htmlspecialchars($c['nom_categorie']) ?></option>
                    <?php endforeach; ?>
                </select>
            </p>
            <p>
                <label for="">Nom</label>
                <input type="text" name="nom" id="nom" value="">
            </p>
            <p>
                <input type="checkbox" name="available" id="check"> Disponible
            </p>
            <input type="submit" class="btn btn-outline-danger" value="Filtrer">
        </form>
    </main>
</body>

</html>