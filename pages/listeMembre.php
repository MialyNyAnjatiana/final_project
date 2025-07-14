<?php
include('../inc/fonctions.php');
session_start();
$membres = getListeMembres();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link href="../assets/img/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Liste des membres</title>
    <?php
    include('../inc/header.php');
    ?>
</head>

<body>

    <div style="margin: 50px;">
        <span class="titre">
            <h1>Liste des membres</h1>
        </span>


        <table class="table table-striped table-hover">

            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($membres as $m): ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($m['nom']) ?></th>
                        <td><?= htmlspecialchars($m['email']) ?></td>
                        <td><a href="ficheMembre.php?id=<?= $m['id_membre'] ?>"><span><i class="bi bi-arrow-right-circle"></i></span></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
</div>
          
    

</body>


</html>