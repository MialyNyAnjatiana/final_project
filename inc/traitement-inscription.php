<?php
include("fonctions.php");
session_start();
$nom = $_POST['nom'];
$date_naissance = $_POST['date_naissance'];
$genre = $_POST['genre'];
$email = $_POST['email'];
$ville = $_POST['ville'];
$mdp = $_POST['password'];
inscription($nom, $date_naissance, $genre, $email, $ville, $mdp);
login($email, $mdp);
?>