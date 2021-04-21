<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/mystyle.css">
    <title>Modification</title>
</head>

<body>
    <?php
        require_once "../model/etudiantdb.php";

        $etudiant = getEtudiantById($_GET['id']);

        // var_dump($etudiant);
        // die;    

    ?>
    <form class="inscription-form" action="../controller/inscriptionController.php" method="POST">
        <h1 style="color : blue">Formulaire de modification </h1>
        <hr />
        <input type="hidden" name="id" value="<?= $etudiant['id'] ?>">
        <input type="hidden" name="password" value="<?= $etudiant['password'] ?>">
        <div>
            <label for=""> Prenom <span>*</span></label>
            <input type="text" name="prenom" value="<?= $etudiant['prenom'] ?>" id="prenom" placeholder="votre prenom svp" required>
        </div>
        <div>
            <label for=""> Nom <span>*</span></label>
            <input type="text" name="nom" value="<?= $etudiant['nom'] ?>" required>
        </div>
        <div>
            <label for=""> Sexe</label>
            <select name="sexe" required>
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
            </select>
        </div>
        <div>
            <label for=""> Date de naissance</label>
            <input type="date" name="date_naiss" value="<?= $etudiant['date_naiss'] ?>" required>
        </div>
        <div>
            <label for="">Login</label>
            <input type="email" name="login" value="<?= $etudiant['login'] ?>" required>
        </div>
       
        <div class="p">
        <button type="submit" value="Modifer" class="inscription-btn" name="edit" > Modifier</button>

        </div>
        <!--p class="p"></!-p-->
    </form>
</body>

</html>