<?php

function affichage($id){
    try
    {
        $db = new PDO('mysql:host=julienrupd825.mysql.db;dbname=julienrupd825;charset=utf8', 'julienrupd825', 'Pastouche0180');
        //$db = new PDO('mysql:host=localhost;dbname=Mendeleiev;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $req = $db->prepare('SELECT nom, presentation
 FROM atomes
WHERE id=?');

    $req->execute(array($id));
    $affiche = $req ->fetch();

    return $affiche;

}