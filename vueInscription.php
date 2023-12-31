<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" href="assets/icon/parcoursup-icon.png" />
</head>
<body>
<?php include "WebsitePart/header/header.php"; ?>
<div class="container">

    <form action="./?action=inscription" method="POST">
        <p class="red">Adresse mail</p>
        <label for="mail-utilisateur">
            <input type="text" name="mailU" placeholder="Votre adresse mail" class="input" required>
        </label>
        <p class="red">Nom d'utilisateur</p>
        <label for="pseudo-utilisateur">
            <input type="text" name="pseudoU" placeholder="Votre nom d'utilsateur" class="input" required>
        </label>
        <p class="red">Votre mot de passe</p>
        <label for="motdepasse">
            <input type="password" name="mdpU" placeholder="Votre mot de passe" class="input" required>
        </label><br /><br />
        <input type="submit" value="Se connecter" class="submit-button">

    </form>
</div>
<?php include "WebsitePart/footer/footer.php"; ?>
</body>
</html>
