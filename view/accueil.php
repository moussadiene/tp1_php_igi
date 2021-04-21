<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/mystyle2.css">
    <title>Accueil</title>
</head>

<body>
    <?php
    require_once "../model/etudiantdb.php";

    $list = listeEdutiant();

//    var_dump($list);

    if(isset($_GET['info'])){
        echo "<h3 style='color = red'> Etudiant suprimer !!!<h3>";
    }
    ?>
    <h1> Liste des etudiants </h1>

    <button style="margin-bottom: 15px; padding: 10px;background: blue"> 
        <a href="inscription.php" 
            style="color : white; font-size:20px; text-decoration: none;">
                Ajouter un etudiant 
            </a>
        </button>

    <table border="1">
        <thead>
            <th>id </th>
            <th>PRENOM </th>
            <th>NOM </th>
            <th>DATE NAISSANCE </th>
            <th>SEXE </th>
            <th>LOGIN </th>
            <th>Actions </th>
        </thead>
        <tbody>
            <?php foreach($list as $et){ ?>
            <tr>
                <td> <?php echo $et['id']?></td>
                <td> <?php echo $et['prenom']?></td>
                <td> <?php echo $et['nom']?></td>
                <td> <?php echo $et['date_naiss']?></td>
                <td> <?php echo $et['sexe']?></td>
                <td> <?php echo $et['login']?></td>
                <td><button><a class="delete" 
                href="editForm.php?id=<?php echo $et['id']?>">edit</a>
                </button>
                <button><a class="delete" 
                href="../controller/inscriptionController.php?id=<?php echo $et['id']?>">delete</a>
                </button></td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</body>

</html>