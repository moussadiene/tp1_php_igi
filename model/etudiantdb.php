<?php

include 'db.php';

function editEtudiant($id,$nom, $prenom, $date_naiss, $sexe, $login, $password)
{

    $db = getConnexion();

    $sql = "UPDATE etudiant SET 
                                nom='$nom', 
                                prenom='$prenom',
                                date_naiss='$date_naiss',
                                sexe='$sexe',
                                login='$login',
                                password='$password'
                            WHERE id=$id";
    
    return $db->exec($sql);
}

function getEtudiantById($id)
{

    $db = getConnexion();

    $sql = "SELECT * FROM etudiant WHERE id=$id";
    
    return $db->query($sql)->fetch();
}
function se_connecter($login, $pass)
{

    $db = getConnexion();

    $sql = "SELECT * FROM etudiant WHERE login='".$login."' AND password='".$pass."'";
    
    return $db->query($sql)->fetch();
}
function modifierPassword($login, $password)
{

    $db = getConnexion();

    $sql = "UPDATE etudiant SET password='$password' WHERE login='$login'";
    
    return $db->exec($sql);
}


function listeEdutiant()
{
    $db = getConnexion();
    $var = "SELECT * FROM etudiant ";

    return $db->query($var)->fetchAll();
}

function delete($id)
{
    $db = getConnexion();

    $sql = "DELETE FROM etudiant WHERE id = $id";

    return $db->exec($sql);
}

function addEtudiant($nom, $prenom, $date_naiss, $sexe, $login, $password)
{
    $db = getConnexion();

    $sql = "INSERT INTO `etudiant`(`id`, `nom`, `prenom`, `date_naiss`, `sexe`, `login`, `password`)
     VALUES (null,'$nom','$prenom',' $date_naiss','$sexe','$login','$password')";

    return $db->exec($sql);
}
