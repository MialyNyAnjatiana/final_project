<?php include('../inc/fonctions.php');
session_start();
$id = $_GET['id'];
$emprunts = listeEmprunts($id);


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
    

    <div style="margin: 50px;">
        <span class="titre">
            <h1>Liste des emprunts</h1>
        </span>


        <table class="table table-striped table-hover">

            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Categorie</th>
                     <th scope="col">Date d'emprunt</th>
                      <th scope="col">Date de retour</th>
                      <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($emprunts as $e): ?>
                    <tr>
                        <th scope="row"><?= htmlspecialchars($e['nom_objet']) ?></th>
                        <td><?= htmlspecialchars($e['nom_categorie']) ?></td>
                        <td><?= htmlspecialchars($e['date_emprunt']) ?></td>
                        <td><?= htmlspecialchars($e['date_retour']) ?></td>
                        <td><a href="ficheObjet.php?id=<?= $e['id_objet'] ?>"><span><i class="bi bi-arrow-right-circle"></i></span></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
</div>
              
    </div>
   
</body>
<footer>

</footer>

</html>