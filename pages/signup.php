<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="shortcut icon" href="../assets/img/holo.png" type="image/x-icon">
    <title>Signup</title>
</head>

<body class="out">
    <div class="out-form">
        <img src="../assets/img/1598px-Holostars_logo.png" alt="" srcset="">
        <h2>Signin</h2>

        <form action="signup.php" method="post">
            <input type="text" name="nom" placeholder="Name" class="out-input">
            <input type="date" name="date_naissance" class="out-input">

            <p>
                <input type="radio" name="genre" Value="F" class="form-check-input" checked>
                <label for="">F         </label>
                
                <input type="radio" name="genre" Value="M" class="form-check-input">
                <label for="">M</label>
            </p>

            <input type="text" name="email" placeholder="Email" class="out-input">
            <input type="text" name="ville" placeholder="ville" class="out-input">
            <input type="password" name="mdp" placeholder="Password" class="out-input">


            <input type="submit" value="Valider" class="out-submit">
        </form>
        <p>Déjà membre <a href="login.php">Login</a></p>
    </div>

</body>

</html>