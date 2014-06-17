<div id="vue2">
    <!-- C'est là que ca devient drole -->
    <script>
        /*
            Cette chose immonde permet plusieurs choses, à la soumission du formulaire:
            - fait appel à ajax via $.post et le fichier php en question
            - passe en parametre -> le numero de match récupéré via le seul champ
                                    remplit du form, le select
                                 -> la liste des Remplacants sous forme
                                    sérializée (c'est un mot?), récupérée sur la div
                                    #sortable3
                                 -> la meme pour les titulaires, mais pour #sortable2
            - le traitement des données se fait donc du coté du fichier php
            - un alert s'affiche a la soumission du bidule histoire de confirmer
         */
        $(document).ready(function(){
            $('#formJoueurs').submit(function() {
                $.post('util/appelAjax.php', {numMatch: $('#formJoueurs').serialize(), getRemp: $('#sortable3').sortable('serialize',{ key: 'Remplacants[]'}), getTitu: $('#sortable2').sortable('serialize',{ key: 'Titulaires[]'})}, function(data){
                    alert(data);
                });
                alert("Votre selection a bien été enregistré !");
            });


        });
    </script>


    <form id="formJoueurs" action="index.php?uc=admin&action=match&gestion=voirmatchs" method="POST">
    <div id="divceptionleretour">
    <h4>Joueurs disponible pour le club <?php echo $_SESSION['nomClub']; ?> : </h4>
    <?php
    //echo var_dump(get_defined_vars());
    $i=1;

    /*
        Liste d'origine, retourne tous les joueurs du club enregistré en $_SESSION
        + ajoute un id à la balise li en question, pour que l'id du joueur soit
        récupérable sur le fichier de traitement ajax
    */
    echo "<ul id='sortable1' class='connectedSortable'>";
        foreach($liste as $j){
            ?>

            <li id="item_<?php echo $j->getIdJou();?>">
                <?php
                 echo $j->getNumJou()." ". $j->getNomJou()." ".$j->getPrenomJou();
            ?></li>

    <?php $i++;
        } ?>
        </ul>

    <div id="matchsprevus">
        Date des matchs prévus prochainement :
        <select name="selectMatch">
            <?php
            $dateDuJour=date("Y-m-d");
            $da = explode("-", $dateDuJour);
            foreach($liste2 as $m){

                if($_SESSION['NumClub']==$m->getClub)

                //Recupere la date du match
                //Créé une variable pour recupérer la date du match -48h
                //Soit la date limite pour soumettre une composition d'équipe
                $datem = $m->getDateMatch();


                $nbjours=2;
                $dmPlus = strtotime($datem);
                $dmFinal = date('Y-m-d', strtotime('-'.$nbjours.'days',$dmPlus));
                $dm = explode("-", $dmFinal);

                if ($da<$dm){


                    $jolieDate = date('d-m-Y', strtotime($m->getDateMatch()));
                ?>
                <option value="<?php echo $m->getNumMatch(); ?>"><?php echo $jolieDate; ?> - <?php echo $m->getEpreuveMatch(); ?> </option>
            <?php }
            }?>
        </select>
        <input type='submit' name='validEquipe' value= "Enregistrer">
    </div>




    </div>

    <div id="divception">

        <?php //echo var_dump(get_defined_vars()); ?>

            Liste de joueurs titulaires :

            <ul id="sortable2" class="connectedSortable"></ul>

            Liste de joueurs remplacants :

            <ul id="sortable3" class="connectedSortable"></ul>

            </div>
            </br>
            </br>
    </form>
</div>
