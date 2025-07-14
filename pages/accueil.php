

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
     <link rel="stylesheet" type="text/css" href="../assets/css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link href="../assets/img/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <title>Accueil</title>
</head>

<body>
    <header class="header">
        <?php include('../inc/header.php'); ?>
    </header>

    <main class="container">
        <section class="title">
            <h2>Liste des <strong>Objets</strong></h2>
            <p>Bienvenue</p>
        </section>

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

        <section class="property">
            <?php foreach ($object as $o): ?>
                    <article class="card" style="width: 18rem;">
                        <div>
                            <img src="../assets/img/<?= htmlspecialchars($o['nom_image']); ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><strong><?= htmlspecialchars($o['nom_objet']); ?></strong></h5>
                            <p class="card-text"><?= htmlspecialchars($o['nom_membre']) ?></p>
                        </div>
                        <ul class="list-group list-group-flush">

                        </ul>
                        <div class="hstack gap-3">
                            <h6 class="p-3"><strong><?= htmlspecialchars($o['nom_categorie']) ?></strong></h6>
                        </div>
                    </article>
            
            <?php endforeach; ?>
        </section>
    </main>
</body>

</html>