<html>

<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title> login </title>
</head>

<body>
    <div style="text-align : center; color : white; ">*
        <marquee behavior="" direction="left">
            <?php
                    if (isset($_GET['confpass'])) {
                echo "<h3> les mots de passe ne sont pas identique</p>";
            }?>
        </marquee>
    </div>
    </div>
        <form class="index-form" action="../controller/indexController.php" method="POST">
            <h2 class="connect"> Reinitialiser mon mot de passe </h2>
            <hr />
          
            <div>
                <input type="email" placeholder="email" name="login" required>
            </div>
            <div>
                <label for="">Nouveau mot de passe </label>
                <input type="password" placeholder="password" name="password" required>
            </div>
            <div>
                <label for="">Confirmer le mot de passe </label>
                <input type="password" placeholder="conform password " name="confpassword" required>
            </div>
            <div>
                <button type="submit" class="index-btn" name="modifier">Reinitialiser</button>
            </div>
        </form>
    </div>
</body>

</html>