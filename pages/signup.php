

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <input type="radio" name="genre" placeholder="genre" class="out-input">
            <input type="text" name="email" placeholder="Email" class="out-input">
            <input type="text" name="ville" placeholder="ville" class="out-input">
            <input type="password" name="mdp" placeholder="Password" class="out-input">


            <input type="submit" value="Valider" class="out-submit">
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>

</body>

</html>