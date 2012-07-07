<?php
session_start();
extract($_POST);
extract($_GET);
// Inclure tous les fichiers class + le fichier paramètre
    // Parametre
    include(dirname(__FILE__).'/parametre.php');

    //Fonction
    include('fonction.php');
    include('fonction_date.php');

    // Class
    include('class.connexion.php');
    include('class.authentification.php');
    include('class.formulaire.php');
//



require_once ('../include/smarty/Smarty.class.php');

$smarty = new Smarty;
$smarty->setTemplateDir('../themes/');
$smarty->setCacheDir('../include/cache/');
$smarty->setCompileDir('../include/template_c/');



$obj_connexion = new connexion($bdd[1]);