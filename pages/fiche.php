<?php
include('../inc/fonctions.php');
session_start();
$id = $_GET['id'];
$objet = getObjet($id);
$membre = getUser($objet['id_membre']);
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
    <title>Fiche de l'objet</title>
</head>

<body class="bg-light">
    <header class="header">
        <?php include('../inc/header.php'); ?>
    </header>
    <main class="container my-5">
        <div class="row">

            <section class="col-md-8">
                <h1 class="property-title">
                    <?= htmlspecialchars($objet['nom_objet']) ?? 'Luxury Villa House' ?>
                    <span class="badge badge-sale">Disponible</span>
                </h1>
                <h3 class="text-danger"><?= htmlspecialchars($objet['nom_categorie']) ?></h3>


                <article id="propertyCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/img/<?= htmlspecialchars($objet['nom_image']) ?>" class="d-block w-100 rounded">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/img/<?= htmlspecialchars($objet['nom_image']) ?>" class="d-block w-100 rounded">
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/img/<?= htmlspecialchars($objet['nom_image']) ?>" class="d-block w-100 rounded">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </article>


                <nav class="d-flex gap-2">
                    <img src="../assets/img/<?= htmlspecialchars($objet['nom_image']) ?>" class="rounded thumb-img border">
                    <img src="../assets/img/<?= htmlspecialchars($objet['nom_image']) ?>" class="rounded thumb-img border">
                    <img src="../assets/img/<?= htmlspecialchars($objet['nom_image']) ?>" class="rounded thumb-img border">
                    <img src="../assets/img/<?= htmlspecialchars($objet['nom_image']) ?>" class="rounded thumb-img border">
                </nav>
            </section>


            <section class="col-md-4">
                <article class="card">
                    <a href="objetAgent.php?id=<?= $membre['id_membre'] ?>">
                        <div class="card-body text-center">
                            <h5 class="card-title">Agent Information</h5>
                            <img src="../assets/img/<?= htmlspecialchars($membre['img_profil']) ?>" class="rounded-circle mb-2" width="80" height="80">
                            <h6><?= htmlspecialchars($membre['nom']) ?></h6>
                            <p class="text-muted">Membre</p>
                            <p><i class="bi bi-geo-alt-fill text-danger"></i> <?= htmlspecialchars($membre['ville']) ?></p>
                            <p><i class="bi bi-cake2-fill text-danger"></i> <?= htmlspecialchars($membre['date_naissance']) ?> </p>
                            <p><i class="bi bi-envelope-fill text-danger"></i> <?= htmlspecialchars($membre['email']) ?></p>
                        </div>
                    </a>
                </article>

            </section>
        </div>
    </main>
</body>

</html>