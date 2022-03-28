<!doctype html>
<html lang="fr">

<?php

require_once('check_if_connected.php');
check_connexion();

if (check_connexion() == true) {
    header('Location: /index.php');
}

require_once('new_user.php');

?>

<head>
    <title>Projet Full stack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <h1>Inscription</h1>

    <form method="post">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="example@webmail.com"><br />
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" placeholder="Votre mot de passe..."><br />
        <button type="submit">S'inscrire</button>
    </form>
    <a href="../index.php">Retour</a>

</body>



</html>