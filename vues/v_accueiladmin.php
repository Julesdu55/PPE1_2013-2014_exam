<div id="pannelcenter">

    <h1>
        Bienvenue sur la partie interne du site de la FFF
    </h1>
    </br>
   <?php //echo var_dump(get_defined_vars());
?>
    </br>

    <?php

    // affichage date du jour + date du prochain match (si il y en a un de prévu)
    $dateComplet = date("d-m-Y");

    echo "Nous sommes le ".$dateComplet."<br>";
    if ($resCo['grade']==0){
        if(empty($listeDate)){
            echo "Aucun match n'est prévu prochainement.";
        }else{
            $vraieBonneDate = date('d-m-Y', strtotime($listeDate[0]->getDateMatch()));
            echo "Le prochain match de l'équipe aura lieu le ".$vraieBonneDate.".<br>";
        }
    }
    ?>

<br>
    <br>


    <?php
    // fancy stuff
    if ($resCo['grade']==1){?>
        Vos informations :
        </br>
        Nom:
        <?php echo $resCo['nomAdmin']; ?>
        </br>
        Prenom:
        <?php echo $resCo['prenomAdmin'];
    }else{ ?>
        <?php echo "<img src='".$_SESSION['imgClub']."'>"; ?>
        </br>
        Représentant du club:


        <?php echo $resCo['nomAdmin']." ".$resCo['prenomAdmin']; ?>
        </br>
        
        
    <?php }
    ?>
</div>