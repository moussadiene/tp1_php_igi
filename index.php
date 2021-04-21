<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="./public/css/mystyle.css">
    <title> login </title>
</head>

<body>
    <div>
        <div>
            <?php
            if (isset($_GET['add'])) {
                echo "<h3 style='color = red'> votre inscription s'est bien passe !!!<h3> <p>merci !!!</p>";
            }
            ?>
        </div>

        <form class="index-form" action="controller/indexController.php" method="POST">
            <h2 class="connect"> Connexion</h2>
            <marquee behavior="" direction="left">
            <?php
            if (isset($_GET['login'])) {
                echo "<h3 style='color = red'> error d'authentification</p>";
            }
            ?>
             <?php
            if (isset($_GET['reinitialiser'])) {
                echo "<h3> l'operation de reinitialialsation de mot de passe a fonctionner</p>";
            }
            ?>
            </marquee>
            <hr />

            <div>
                <input type="email" placeholder="identifiant" name="login" required>
            </div>
            <div>
                <input type="password" placeholder="mot de passe " name="pass" required>
            </div>
            <a href="view/changer_password.php"> mot de passe oublié ?</a>
            <div>
                <button type="submit" class="index-btn">se connecter</button>
            </div>
            <div class="new-compte">
                <a href="view/inscription.php"> Creer un compte !!!</a>
            </div>
        </form>
    </div>
</body>

</html>