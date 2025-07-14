<?php include('../inc/fonctions.php');
session_start();
$id = $_GET['id'];
$objets = getObjetMembre($id);
$membre = getUser($id);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Fiche du membre</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link href="../assets/img/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light" style="margin: 10px;">
    <div class="header">
        <?php include('../inc/header.php'); ?>
    </div>
    <div class="container py-5">
        <div class=" mb-4">
            <div class="card property-card shadow-sm">
                <div class="card-body">
                    <img src="../assets/img/<?= htmlspecialchars($membre['img_profil'] ?? 'default.jpg') ?>" class="rounded-circle mb-2" width="80" height="80">
                    <h3><?= htmlspecialchars($membre['nom']) ?></h3>
                    <p>
                        <i class="bi bi-geo-alt-fill text-danger"></i> <?= htmlspecialchars($membre['ville']) ?>
                        <i class="bi bi-cake2-fill text-danger"></i> <?= htmlspecialchars($membre['date_naissance']) ?>
                        <i class="bi bi-envelope-fill text-danger"></i> <?= htmlspecialchars($membre['email']) ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-4"> <?php foreach ($objets as $obj): ?>
                <div class="col-md-4">
                    <div class="card property-card shadow-sm">
                        <img src="../assets/img/<?= htmlspecialchars($obj['nom_image']) ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($obj['nom_objet']) ?>
                                <span class="badge rounded-pill text-bg-danger">For Sale</span>
                            </h5>
                            <p class="text-danger fw-bold"><?= htmlspecialchars($obj['nom_categorie']) ?></p>
                            <a href="fiche.php?id=<?= $obj['id_objet'] ?>" class="btn btn-outline-primary w-100"> Voir les détails
                                <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        
    </div>
    <?php include('../inc/footer.php'); ?>
</body>

</html>