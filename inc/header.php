<?php
$user = getUser($_SESSION['id']);
$categories = getCategories();
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <section class="container-fluid">
        <a class="navbar-brand" href="accueil.php">NAV-1GATI0N</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <section class="collapse navbar-collapse" id="navbarSupportedContent">


            <ul class="navbar-nav mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="recherche.php">
                        Rechercher
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="formulaireAjout.php">Ajouter un objet</a></li>
                
                <li class="nav-item">
                    <a class="nav-link" href="ficheMembre.php?id=<?= htmlspecialchars($user['id_membre']) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hi, <?= htmlspecialchars($user['nom']) ?>
                    </a>
                </li>

                <li class="nav-item"><a class="nav-link active text-bg-danger" aria-current="page" href="../inc/deconnexion.php">Disconnect</a></li>
                 <li class="nav-item"><a class="nav-link active" aria-current="page" href="listeMembre.php">Fiche </a></li>
                 
            </ul>


        </section>
    </section>
</nav>