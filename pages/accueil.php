<?php
include('../inc/fonctions.php');
session_start();
$situation = getSituationObjet();
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
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link href="../assets/img/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Accueil</title>
</head>

<body>

    <div style="margin: 10px;">
        <header class="header">
            <?php include('../inc/header.php'); ?>
        </header>

        <main class="container">

            <section class="title">
                <h2>Liste des <strong>Objets</strong></h2>
                <p>Bienvenue</p>
            </section>


            <section class="property">
                <?php foreach ($object as $o): ?>

                    <article class="card" style="width: 18rem;">
                    <a class="nav-link active" aria-current="page" href="ficheMembre.php?id=<?= htmlspecialchars($o['id_objet']) ?>"> 
                        <div>
                            <img src="../assets/img/<?= htmlspecialchars($o['nom_image']); ?>" class="card-img-top" alt="...">
                            <h6><span class="badge top-left"><?= htmlspecialchars($o['nom_categorie']) ?></span></h6>
                            <?php foreach ($situation as $s): ?>
                                <h6><span class="badge top-right"><?= disponibilité($o['id_objet']) ?></span></h6>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong><a href="fiche.php?id=<?= $o['id_objet'] ?>"><?= htmlspecialchars($o['nom_objet']); ?></a></strong></h5>
                            <p class="card-text"><a href="ficheMembre.php?id=<?= htmlspecialchars($o['id_membre']) ?>"><?= htmlspecialchars($o['nom_membre']) ?></a></p>
                            <a href="formulaireEmprunt.php?id=<?= $o['id_objet'] ?>" class="btn btn-outline-primary w-100"> Emprunter
                                <i class="bi bi-arrow-right"></i> </a>
                        </div>
                        <div class="hstack gap-3">
                            <h6 class="p-3"><strong></strong></h6>
                        </div>
                        </a>
                    </article>

                <?php endforeach; ?>
            </section>

           
        </main>
    </div>
     <?php include('../inc/footer.php'); ?>
</body>

</html>