<?php

function lecture($id)
{
    try
    {
        $db = new PDO('mysql:host=julienrupd825.mysql.db;dbname=julienrupd825;charset=utf8', 'julienrupd825', 'Pastouche0180');
        //$db = new PDO('mysql:host=localhost;dbname=Mendeleiev;charset=utf8', 'root', 'root');

    }//tentative de connection a la base de donnée
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }//Message d'erreur si cela ne fonctionne pas (Page 436)

// $req va donc etre notre requête que nous préparons en mettant id=?
    $req = $db->prepare('SELECT nom, numero, symbole, masse_atomique
 FROM atomes
WHERE id=?');
//nous récupérons les données de la requête dans un tableau
    $req->execute(array($id));
    $affiche = $req ->fetch();
//Nous retournons le array contenant les données demandé dans la requête, il suffira juste d'appeler la fonction lecture avec un $id définit
     return $affiche;
}



