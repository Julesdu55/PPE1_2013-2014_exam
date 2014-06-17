<?php

    if (isset($_REQUEST['action'])){
        $action=$_REQUEST['action'];
    }
    else{
        $action="connexion";
    }
    //echo var_dump($_REQUEST);
    //echo var_dump($_POST);

    switch ($action) {
        case "connexion":
        {
            if (isset($_POST['login']) && (isset($_POST['pass']))) {
                $log=$_POST['login'];
                $mdp=$_POST['pass'];

                //Test pour pouvoir se connecter
                $resCo = $ClubDAO->connexion($log, $mdp);
                

                if ($resCo==false){
                    header("Location: index.php?uc=accueil&action=connexion");
                }else{
                    $_SESSION['connexion'] = TRUE;
                    // vérification du grade. 0 = club, 1 = responsable FFF
                    if($resCo['grade']==0){
                        // affectation des variables du club via $_SESSION
                        $resClub = $ClubDAO->findById($resCo['NumClub']);

                        $numClub = $resClub['NumClub'];
                        $nomClub = $resClub['NomClub'];
                        $adresseClub = $resClub['AdresseClub'];
                        $cpClub = $resClub['CPClub'];
                        $villeClub = $resClub['VilleClub'];
                        $telClub = $resClub['TelClub'];
                        $mailClub = $resClub['MailClub'];
                        $imgClub = $resClub['imgClub'];

                        $_SESSION['numClub'] = $numClub;
                        $_SESSION['nomClub'] = $nomClub;
                        $_SESSION['adresseClub'] = $adresseClub;
                        $_SESSION['cpClub'] = $cpClub;
                        $_SESSION['villeClub'] = $villeClub;
                        $_SESSION['telClub'] = $telClub;
                        $_SESSION['mailClub'] = $mailClub;
                        $_SESSION['imgClub'] = $imgClub;
                        $_SESSION['grade']=0;

                        $liste2 = $MatchDAO->findClubById($_SESSION['numClub']);
                        $listeDate = $MatchDAO->findClosestMatch($_SESSION['numClub']);

                    }else{
                        $_SESSION['grade'] = 1;
                    }

                    include("vues/v_header_admin.php");
                    include("vues/v_accueiladmin.php");

                }
            }
            else {
            //si c'est cassé, redirection vers l'accueil
                include("vues/v_accueil.php");
            }
            break;
        }

        case "club":
        {
            if(isset($_SESSION['grade']) && ($_SESSION['grade'])==0){
                //Trouver tous les matchs/joueurs par club
                $liste = $JoueursDAO->findAllByClub($_SESSION['numClub']);
                $liste2 = $MatchDAO->findClubById($_SESSION['numClub']);

                include("vues/v_header_admin.php");
                include("controlleurs/c_club.php");
            }else{
                include("vues/v_header_admin.php");
                include("vues/v_error.php");
            }
            break;
        }
		
		case "match" :
		{
            //Trouver tous les clubs et matchs enregistrés
            $liste = $ClubDAO->findAll();
            $liste2 = $MatchDAO->findAll();

            include("vues/v_header_admin.php");
            include("controlleurs/c_match.php");
			break;
		}
}