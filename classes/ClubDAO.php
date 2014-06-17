<?php
require_once('MysqlDAO.php');
require_once('Club.php');

class ClubDAO extends MysqlDAO {
	
public function __construct(){
	parent::__construct();
}

public function create($_o) {


}

public function update($t) {

    $sql = "Update club SET NomClub=".$t->getNom.",AdresseClub=".$t->getAdresse().",CPClub=".$t->getCp().",VilleClub=".$t->getVille().",TelClub=".$t->getTel().",MailClub=".$t->getMail().",imgClub=".$t->getImg().", imgClubS=".$t->getImgS()."  where NumClub=".$t->getId();
    MysqlDAO::$monPdo->query($sql);


}

public function delete($_id) {
    $sql = "Delete  from club where NumClub=".$_id;
    MysqlDAO::$monPdo->query($sql);


}

public function findAll() {
    $sql = "select * from club order by NumClub asc";
    $requete_findAll=MysqlDAO::$monPdo->query($sql);
    $liste=array();
    while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
        $c = new Club();
        $c->setId($ligne->NumClub);
        $c->setNom($ligne->NomClub);
        $c->setImg($ligne->imgClub);
        $c->setImgS($ligne->imgClubS);

        $liste[]=$c;
    }
    return $liste;
}

public function findById($_id) {

    $sql = "select * from club Where NumClub =".$_id;
    if($requete_findById=MysqlDAO::$monPdo->query($sql)){
        $ligne=$requete_findById->fetch();
        return $ligne;
    }else{
        return false;
    }
    

}

public function connexion($id, $password){
    $req="select * from admin where loginAdmin='".$id."' and mdpAdmin='".$password."'";
    if ($rs = MysqlDAO::$monPdo->query($req)){
        $ligne = $rs->fetch();
        return $ligne;
    }else{
        return "login ou mdp faux";
    }

}

}
?>