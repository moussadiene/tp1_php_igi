<?php

require_once "../model/etudiantdb.php";
// require_once "../model/db.php";

// var_dump(getConnexion());
// die;

if (isset($_GET["id"])) {

    $info = delete($_GET["id"]);

    header("Location: ../view/accueil.php?info=$info");
}elseif(isset($_POST['envoyer'])) {

    if ($_POST["password"] === $_POST["passwordConfirm"]) {
        //$pass = md5($_POST["password"]);
        $res = addEtudiant(
            $_POST["nom"],
            $_POST["prenom"],
            $_POST["date_naiss"],
            $_POST["sexe"],
            $_POST["login"],
            $_POST["password"]
        );
        header("Location: ../index.php?add=$res");
    } else {
        header("Location: ../view/inscription.php?erreur=password");
    }
}elseif(isset($_POST['edit'])){
    $ok = editEtudiant(
    $_POST["id"],
    $_POST["nom"],
    $_POST["prenom"],
    $_POST["date_naiss"],
    $_POST["sexe"],
    $_POST["login"],
    $_POST["password"]);

    if($ok){
        header("Location: ../view/accueil.php?modif=1");
    }else{
        header("Location: ../view/accueil.php?modif=0");
    }
}else{
    header("Location: ../index.php");
}
