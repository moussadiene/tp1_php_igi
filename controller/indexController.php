<?php

    require_once '../model/etudiantdb.php';

    if(isset($_POST['login']) && isset($_POST['pass'])){

        $conn = se_connecter($_POST['login'],$_POST['pass']);

        if($conn){
            header("Location: ../view/accueil.php");
        }else{
            header("Location: ../index.php?login=0");            
        }
    }else{
        header("Location: ../index.php");
    }

    if(isset($_POST['modifier'])){

        if($_POST['password'] === $_POST['confpassword']){
            $reini = modifierPassword($_POST['login'],$_POST['password']);

            header("Location: ../index.php?reinitialiser=$reini");
        }else{
            header("Location: ../view/changer_password.php?confpass=0");
        }
       
    }

    



