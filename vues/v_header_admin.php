<div id="menu_deroulant">
	<ul id="listed">
		<li>
			Match
			<ul>
				<li><a href="index.php?uc=admin&action=match&gestion=voirmatchs" >Voir les matchs</a></li>
                <?php if ($_SESSION['grade'] == 1 ){
                    // affichage du menu ajout match pour un admin?>
				<li ><a href="index.php?uc=admin&action=match&gestion=newmatch" >Ajouter un match</a></li>
                <?php } ?>
			</ul>
		</li>

        <?php if($_SESSION['grade'] == 0){
            // affichage du menu club/choisir les joueurs pour un responsable club
            ?>
		<li>
			Club
			<ul>
					<li><a href="index.php?uc=admin&action=club&gestion=choixjoueurs" >Choisir les joueurs</a></li>

			</ul>
		</li>
        <?php } ?>


            <li>
                Quitter
                <ul>
                    <li><a href="index.php?uc=admin&action=match&gestion=voirmatchs" >Deconnexction</a></li>
	             </ul>

            </li>

	</ul>
</div>