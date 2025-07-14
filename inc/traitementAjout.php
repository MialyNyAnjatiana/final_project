<?php
include('fonctions.php');
session_start();
$id_membre = $_SESSION['id'];
$nom_objet = $_GET['nom'];
$id_categorie = $_GET['categorie'];
ajoutDepartement($num,$name);
?>

