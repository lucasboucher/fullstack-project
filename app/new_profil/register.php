<?php
    session_start();
    require('check.php');
    check_if_connected(false, "already");
?>
<html lang="fr">
<head>
    <title>Inscription</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<?php

if (isset($_GET['email_no_exist'])) {
    echo "Cet e-mail n'est pas inscrit.";
}

require('../db_connect.php');
if (isset($_REQUEST['email'], $_REQUEST['password'])){
    $email = stripslashes($_REQUEST['email']);
    $password = password_hash(stripslashes($_REQUEST['password']), PASSWORD_DEFAULT);
    $sql = "INSERT INTO `user` (`email`, `password`) VALUES (:email, :password);";
    $query = $db->prepare($sql);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);
    $res = $query->execute();
    if($res) {
        ?>
            <div class='sucess'>
                <h3>Vous êtes inscrit avec succès.</h3>
                <p>Cliquez ici pour vous <a href='login.php'>connecter</a> !</p>
            </div>
        <?php
    }
}
else {
    ?>
        <form class="box" action="" method="post">
            <h1 class="box-title">S'inscrire</h1><br>
            <label>E-mail :
                <input type="text" class="box-input" name="email" placeholder="Votre e-mail préféré" required />
            </label><br><br>
            <label>Mot de passe :
                <input type="password" class="box-input" name="password" placeholder="Un mot de passe solide" required />
            </label><br><br>
            <input type="submit" name="submit" value="S'inscrire" class="box-button" /><br><br>
            <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
        </form>
    <?php
}
?>
</body>
</html>