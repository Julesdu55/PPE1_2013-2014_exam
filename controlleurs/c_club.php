<?php
$gestion = $_REQUEST['gestion'];
switch ($gestion){

    case "choixjoueurs":{
        include("vues/v_joueurs.php");
        break;
    }

}
