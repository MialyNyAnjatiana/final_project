<?php
require("connexion.php");

function login($email, $mdp)
{

    $email = mysqli_real_escape_string(dbconnect(), $email);
    $mdp = mysqli_real_escape_string(dbconnect(), $mdp);

    $sql = "SELECT * FROM emp_membre WHERE email='$email' and mdp = '$mdp'";
    $result = mysqli_query(dbconnect(), $sql);

    if ($data = mysqli_fetch_assoc($result)) {
        $_SESSION['id'] = $data['id_membre'];
        header('Location:../pages/accueil.php');
    } else {
        header('Location:../pages/login.php?error=1');
    }
}

function inscription($nom, $date_naissance, $genre, $email, $ville, $mdp)
{
    $conn = dbconnect();

    $nom = mysqli_real_escape_string(dbconnect(), $nom);
    $date_naissance = mysqli_real_escape_string(dbconnect(), $date_naissance);
    $genre = mysqli_real_escape_string(dbconnect(), $genre);
    $email = mysqli_real_escape_string(dbconnect(), $email);
    $ville = mysqli_real_escape_string(dbconnect(), $ville);
    $mdp = mysqli_real_escape_string(dbconnect(), $mdp);

    $photo = "img/photo.png";

    $sql = "INSERT INTO emp_membre (nom, date_naissance,genre, email, ville,mdp,img_profil) 
            VALUES ('$nom', '$date_naissance','$genre' ,'$email', '$ville','$mdp','$photo')";
    mysqli_query(dbconnect(), $sql);
}

function getCategories()
{
    $sql = "SELECT * FROM emp_categorie_objet";
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}

function getListeObjet()
{
    $sql = "SELECT * FROM v_emp_obj_categorie_img";
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}

function getListeMembres()
{
    $sql = "SELECT * FROM emp_membre";
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}

function getSituationObjet()
{
    $sql = "SELECT * FROM v_emp_obj_membre_emprunt";
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}

function filtreObjetCategorie($id_categorie)
{
    $sql = sprintf("SELECT * FROM v_emp_obj_categorie_img WHERE id_categorie = %x", $id_categorie);
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}

function getUser($idUser)
{
    $sql = sprintf("SELECT * FROM emp_membre WHERE id_membre = %x", $idUser);
    $result = mysqli_query(dbconnect(), $sql);
    if ($data = mysqli_fetch_assoc($result)) {
        return $data;
    } else {
        return NULL;
    }
    mysqli_free_result($result);
}

function getObjetMembre($id_membre)
{
    $sql = sprintf("SELECT * FROM v_emp_obj_categorie_img WHERE id_membre = %x ORDER BY nom_categorie", $id_membre);
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}

function getQuery($cat, $name, $available)
{
    $sql = "SELECT * FROM v_emp_obj_categorie_img WHERE 1=1";
    if ($cat != "") {
        $sql .= sprintf(" AND id_categorie = %x", $cat);
    }

    if ($name != "") {
        $sql .= sprintf(" AND nom_objet LIKE '%%%s%%'", $name);
    }

    return $sql;
}

function searchObjet($cat, $name, $available)
{
    $sql = getQuery($cat, $name, $available);
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}

function getCategorieObjet()
{
    $sql = "SELECT * FROM emp_categorie_objet";
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}

function getObjet($id)
{
    $sql = sprintf("SELECT * FROM v_emp_obj_categorie_img WHERE id_objet = %x", $id);
    $result = mysqli_query(dbconnect(), $sql);
    if ($data = mysqli_fetch_assoc($result)) {
        return $data;
    } else {
        return NULL;
    }
    mysqli_free_result($result);
}

function emprunter($obj, $user, $duree)
{
    $sql = sprintf("INSERT INTO emp_emprunt (id_objet, id_membre, date_emprunt, date_retour) VALUES (%x, %x, NOW(), DATE_ADD(NOW(), INTERVAL %d DAY))", $obj, $user, $duree);
    mysqli_query(dbconnect(), $sql);
    header('Location: ../pages/accueil.php');
}

function disponibilité($id_objet)
{
    $sql = "SELECT * FROM emp_emprunt WHERE id_objet =".$id_objet ." ORDER BY date_retour DESC";
    $result = mysqli_query(dbconnect(), $sql);
    if ($data = mysqli_fetch_assoc($result)) {
        if ($data['date_retour'] === NULL) {
            return "emprunté";
        } else if ($data['date_retour'] > date('Y-m-d')) {
            return "disponible";
        } else if ($data['date_retour'] <= date('Y-m-d')) {
            return "disponible le" . $data['date_retour'];
        } else {
            return "disponible";
        }
    }
    return "disponible";
}

function listeEmprunts($id_membre)
{

    $sql = sprintf("SELECT * FROM v_emp_obj_membre_emprunt WHERE id_membre = '%x'", $id_membre);
    $tab = mysqli_query(dbconnect(), $sql);
    $result = array();
    while ($data = mysqli_fetch_assoc($tab)) {
        $result[] = $data;
    }
    mysqli_free_result($tab);
    return $result;
}


