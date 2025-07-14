<?php
include("../inc/fonctions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" href="../assets/img/holo.png" type="image/x-icon">
    <title>Login</title>
</head>

<body class="out">
    <div class="out-form">
        <img src="../assets/img/1598px-Holostars_logo.png">
        <h5>Login to your account</h5>

        <?php if (isset($_GET['error'])) { ?>
            <p style="color: red">Account does not exist</p>
        <?php } ?>

        <form action="../inc/traitement.php" method="post">
            <input type="text" name="email" placeholder="Enter your Email" value="rasoa.rakoto@example.com" class="out-input">

            <input type="password" name="password" placeholder="Password" value="mdp_rasoa" class="out-input">

            <input type="submit" value="Login" class="out-submit">
            <p>Not a member? <a href="signup.php">Create a new account</a></p>
        </form>
    </div>
</body>

</html>