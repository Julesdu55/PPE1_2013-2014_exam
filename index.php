<?php
session_start();

require_once('classes/JoueursDAO.php');
require_once('classes/ClubDAO.php');
require_once('classes/MatchDAO.php');
include("vues/v_entete.php");


$ClubDAO = new ClubDAO();
$MatchDAO = new MatchDAO();
$JoueursDAO = new JoueursDAO();

if(!isset($_REQUEST['uc'])){
     $uc = 'accueil';
    header("location:index.php?uc=accueil");
}else{
	$uc = $_REQUEST['uc'];
}


switch($uc)
{
    //Envoie sur accueil si non connecté, sinon redirige côté controlleur admin
	case 'accueil':
	{      
            if(isset($_REQUEST['action']) && $_REQUEST['action']=="connexion"){
                echo "Fail !";
            }
			include("vues/v_accueil.php");
			break;
	}
    case 'admin':
    {
        include ("controlleurs/c_administrateur.php");
        break;
    }

    //Plus vraiment d'utilité pour le moment
    case 'error':{
        include("vues/v_error.php");
        break;
    }

    case 'deco':{
        include("vues/v_deco.php");
        break;
    }

}

//echo var_dump(get_defined_vars());

include("vues/v_pied.php") ;
?>