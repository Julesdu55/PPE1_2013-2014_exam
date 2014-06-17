<?php
require_once('MysqlDAO.php');
require_once('Club.php');
require_once('Match.php');
/**
 * Created by JetBrains PhpStorm.
 * User: jules.C
 * Date: 08/01/14
 * Time: 16:49
 * To change this template use File | Settings | File Templates.
 */

class MatchDAO extends MysqlDAO  {

    public function __construct(){
        parent::__construct();
    }
    public function create($_o) {
        $sql = "Insert into `match` VALUES ('','".$_o->getDateMatch()."','".$_o->getEpreuveMatch()."','".$_o->getClub1()."','".$_o->getClub2()."');";
        MysqlDAO::$monPdo->query($sql);
        //echo $sql;

    }

    public function update($t) {

        $sql = "Update match SET dateMatch=".$t->getdateMatch().",epreuveMatch=".$t->getepreuveMatch().",club1=".$t->getclub1().",club2=".$t->getclub2()." where numMatch=".$t->getnumMatch();
        MysqlDAO::$monPdo->query($sql);


    }

    public function delete($_id) {
        $sql = "Delete  from match where numMatch=".$_id;
        MysqlDAO::$monPdo->query($sql);


    }

    public function findAll() {
        $sql = "select * from `match` order by numMatch asc";
        $requete_findAll=MysqlDAO::$monPdo->query($sql);
        $liste2=array();
        while ($ligne=$requete_findAll->fetch(PDO::FETCH_OBJ)){
            $m = new Match();
            $m->setDateMatch($ligne->dateMatch);
            $m->setNumMatch($ligne->numMatch);
            $m->setEpreuveMatch($ligne->epreuveMatch);
            $m->setClub1($ligne->numClub1);
            $m->setClub2($ligne->numClub2);

            $liste2[]=$m;
        }
        return $liste2;
    }


    public function findById($_id) {

        $sql = "select * from match Where numMatch=".$_id;
        if($requete_findById=MysqlDAO::$monPdo->query($sql)){
            $ligne=$requete_findById->fetch();
            return $ligne;
        }else{
            return false;
        }


    }

    public function findClubById($_id){
        $sql = "select * from `match` where numClub1=".$_id." OR numClub2=".$_id;

        $rq=MysqlDAO::$monPdo->query($sql);
        $liste=array();
        while ($ligne=$rq->fetch(PDO::FETCH_OBJ)){
            $m = new Match();
            $m->setDateMatch($ligne->dateMatch);
            $m->setNumMatch($ligne->numMatch);
            $m->setEpreuveMatch($ligne->epreuveMatch);
            $m->setClub1($ligne->numClub1);
            $m->setClub2($ligne->numClub2);

            $liste[]=$m;
        }
        return $liste;
    }

    public function findClosestMatch($_id){
        $sql = "SELECT *
                FROM  `match`
                WHERE numClub1=".$_id." OR numClub2=".$_id."
                ORDER BY dateMatch";


        $dateajd= date("Y-m-d");
        $da = explode("-", $dateajd);

        $rq=MysqlDAO::$monPdo->query($sql);
        $liste=array();
        while ($ligne=$rq->fetch(PDO::FETCH_OBJ)){
            $datem = $ligne->dateMatch;
            $dm = explode("-", $datem);

            if ($da<$dm){
                $m = new Match();
                $m->setDateMatch($ligne->dateMatch);
                $m->setNumMatch($ligne->numMatch);
                $m->setEpreuveMatch($ligne->epreuveMatch);
                $m->setClub1($ligne->numClub1);
                $m->setClub2($ligne->numClub2);

                $liste[]=$m;
            }


        }
        return $liste;
    }

    public function getCompoClub1($idMatch){
        $sql = "SELECT * from participer where idMatch=".$idMatch;
        $req=MysqlDAO::$monPdo->query($sql);


    }

}
