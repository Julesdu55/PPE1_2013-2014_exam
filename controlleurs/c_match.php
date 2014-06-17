<?php
    if (isset($_REQUEST['gestion'])){
        $gestion=$_REQUEST['gestion'];
    }
    else{
        $gestion="newmatch";
    }

    switch ($gestion){
        case "newmatch":{
            include("vues/v_newmatch.php");
            break;
        }

        case "voirmatchs":{
            include("vues/v_voirmatchs.php");
            break;
        }

        case "voircompos":{
            include("vues/v_voircompos.php");
            break;
        }
    }
