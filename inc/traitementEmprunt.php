<?php
include('../inc/fonctions.php');
session_start();
$id = $_GET['id'];
$duree = $_GET['duree'];
$user = $_SESSION['id'];

emprunter($id, $user, $duree);

?>