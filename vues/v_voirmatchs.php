<div id="pannel">
    <table>
        <?php //echo var_dump(get_defined_vars()); ?>
        <tr>
            <td>Date</td>
            <td>Epreuve</td>
        </tr>
        <?php
        $i=1;
        foreach($liste2 as $m){?>
            <tr>
                <td>
                    <?php
                    $jolieDate = date('d-m-Y', strtotime($m->getDateMatch()));
                    echo $jolieDate;
                    ?>
                </td>
                <td>
                    <?php

                    echo $m->getEpreuveMatch();?>
                </td>
                <td>
                    <?php
                        $c = new ClubDAO();
                        $club1 = new Club();
                        $club2 = new Club();

                        $club1 = $c->findById($m->getClub1());
                        $club2 = $c->findById($m->getClub2());
                    echo "<img src='".$club1['imgClubS']."'> </td><td>".$club1['NomClub']."</td> <td> contre </td><td><img src='".$club2['imgClubS']."'></td> <td>".$club2['NomClub']."</td>";
                    ?>
                <td>

                    <a href="index.php?uc=admin&action=match&gestion=voircompos&numero=<?php echo $m->getNumMatch(); ?>">Voir Compositions</div>
                </td>
            </tr>
        <?php
            $i++;
        }
    ?>
    </table>
</div>
