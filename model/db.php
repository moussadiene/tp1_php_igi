<?php

function getConnexion()
{
    $dsn = "mysql:host=localhost;dbname=tp_php_igi";

    try {
        $mydb = new PDO($dsn, 'djine', "mosila21");

        $mydb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $ex) {
        die('Erreur : ' . $ex->getMessage());
    }
    return $mydb;
}
