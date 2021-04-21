<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Inscription</title>
</head>

<body>
    <?php
    if (isset($_GET['erreur'])) {
        echo "<h3 style='color = red'> mot de passe non identique!!!<h3>";
    }
    ?>
    <form class="inscription-form" action="../controller/inscriptionController.php" method="POST">
        <h1 style="color : blue">Formulaire d'inscription </h1>
        <hr />
        <div>
            <label for=""> Prenom <span>*</span></label>
            <input  type="text" name="prenom" value="" id="prenom" placeholder="votre prenom svp" required focus>
        </div>
        <div>
            <label for=""> Nom <span>*</span></label>
            <input type="text" name="nom" value="" required>
        </div>
        <div>
            <label for=""> Sexe</label>
            <select name="sexe" required>
                <option value="">-- select --</option>
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
            </select>
        </div>
        <div>
            <label for=""> Date de naissance</label>
            <input type="date" name="date_naiss" value="" required>
        </div>
        <div>
            <label for="">Login</label>
            <input type="email" name="login" value="" required>
        </div>
        <div>
            <label for=""> password</label>
            <input type="password" name="password" value="" required>
        </div>
        <div>
            <label for=""> Confirmer Password </label>
            <input type="password" name="passwordConfirm" value="" required>
        </div>
        <div class="p">
            <button type="reset" class="annuler"> annuler</button>

            <input type="submit" value="envoyer" class="inscription-btn" name="envoyer" />

        </div>
        <!--p class="p"></!-p-->
    </form>
</body>

</html>