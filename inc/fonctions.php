<?php
require("connexion.php");

function login($email, $mdp)
{

    $email = mysqli_real_escape_string(dbconnect(), $email);
    $mdp = mysqli_real_escape_string(dbconnect(), $mdp);

    $sql = "SELECT * FROM emp_membre WHERE email='$email' and mdp = '$mdp'";
    $result = mysqli_query(dbconnect(), $sql);

    if ($data = mysqli_fetch_assoc($result)) {
        $_SESSION['id'] = $data['id'];
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
    header('Location:../pages/accueil.php');
}
