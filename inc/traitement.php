<?php
include("fonctions.php");
session_start();
$email = $_POST['email'];
$mdp = $_POST['password'];
login($email, $mdp);
?>