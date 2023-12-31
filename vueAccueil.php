<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/icon/parcoursup-icon.png">
</head>
<body>
<div class="container">
    <header>
        <div class="gradient-policy"><h1>Bienvenue sur Projet Sélection</h1></div>

        <nav class="navbar">
            <ul class="nav-menu">
                <?php if (isLoggedOn()) { ?>
                    <li class="nav-item">
                        <a href="./?action=monProfil" class="blue-btn">Mon profil</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a href="./?action=connexion" class="blue-btn">Se connecter</a>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="./?action=cgu" class="blue-btn">CGU</a>
                </li>
               

            </ul>
        </nav>
        <hr class="hr-gradient">
    </header>


</div>
</body>
</html>