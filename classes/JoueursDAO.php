<?php
require_once('MysqlDAO.php');
require_once('Joueurs.php');

class JoueursDAO extends MysqlDAO{

    public function __construct(){
        parent::__construct();
    }

    public function create($_o) {

    }

    public function update($t) {
        $sql = "Update joueur SET NomJou=".$t->getNomJou.",PrenomJou=".$t->getPrenomJou().",AdresseJou=".$t->getAdresseJou().",CPJou=".$t->getCPJou().",VilleJou=".$t->getVilleJou().",TelJou=".$t->getTelJou().",MailJou=".$t->getMailJou().",Date_NaissJou=".$t->getDate_NaissJou().",PhotoJou=".$t->getPhotoJou().",NumClub=".$t->getNumClub()."where NumJou=".$t->getNumJou();
        MysqlDAO::$monPdo->query($sql);
    }

    public function delete($_NumJou) {
        $sql = "Delete from joueur where NumJou=".$_NumJou;
        MysqlDAO::$monPdo->query($sql);
    }

    public function findAll() {
        $sql = "select * from joueur order by idJou asc";
        $requete_findAll=MysqlDAO::$monPdo->query($sql);
        $liste=array();
        while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
            $j = new Joueurs();
            $j->setIdJou($ligne->idJou);
            $j->setNumJou($ligne->NumJou);
            $j->setNomJou($ligne->NomJou);
            $j->setPrenomJou($ligne->PrenomJou);
            $j->setAdresseJou($ligne->AdresseJou);
            $j->setCPJou($ligne->CPJou);
            $j->setVilleJou($ligne->VilleJou);
            $j->setTelJou($ligne->TelJou);
            $j->setMailJou($ligne->MailJou);
            $j->setDateNaissJou($ligne->Date_NaissJou);
            $j->setNumClub($ligne->NumClub);

            $liste[]=$j;
        }
        return $liste;
    }

    public function findById($_idJou) {

        $sql = "select * from joueur where idJou =".$_idJou;
        if($requete_findById=MysqlDAO::$monPdo->query($sql)){
            $ligne=$requete_findById->fetch();
            return $ligne;
        }else{
            return false;
        }


    }

    public function findAllByClub($_NumClub){
        $sql = "select * from joueur where NumClub = ".$_NumClub." order by NumJou asc";
        $requete_findAll=MysqlDAO::$monPdo->query($sql);
        $liste=array();
        while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
            $j = new Joueurs();
            $j->setIdJou($ligne->idJou);
            $j->setNumJou($ligne->NumJou);
            $j->setNomJou($ligne->NomJou);
            $j->setPrenomJou($ligne->PrenomJou);
            $j->setAdresseJou($ligne->AdresseJou);
            $j->setCPJou($ligne->CPJou);
            $j->setVilleJou($ligne->VilleJou);
            $j->setTelJou($ligne->TelJou);
            $j->setMailJou($ligne->MailJou);
            $j->setDateNaissJou($ligne->Date_NaissJou);
            $j->setNumClub($ligne->NumClub);

            $liste[]=$j;
        }
        return $liste;
    }

    public function participe($idMatch, $idJou, $role){
        $sql="Insert into participer values (".$idMatch.",".$idJou.",'".$role."');";
        $req = MysqlDAO::$monPdo->query($sql);
        echo $sql;

    }
}