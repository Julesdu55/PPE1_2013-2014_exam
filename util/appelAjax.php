<?php
    require_once '../classes/JoueursDAO.php';
    /*if(isset($_POST['listTitu'])){
        $listTitu = $_POST['listTitu'];
        $outputTitu = array();
        $listTitu=parse_str($listTitu, $outputTitu);

        print_r($outputTitu);
    }else if(isset($_POST['listRemp'])){
        $listRemp = $_POST['listRemp'];
        $outputRemp = array();
        $listRemp=parse_str($listRemp, $outputRemp);

        //print_r($outputRemp);

        for($i=0;$i<=count($listRemp); $i++){

            echo "<input type='text' name ='hid".$i."' value='".$listRemp[$i]."'>";
            //echo $_SESSION['listRemp']= $outputRemp[$i];
        }
    }else{
        echo "Erreur ajax! Je veux bien un mail pour savoir comment c'est possible. Sait-on jamais.";
    }

    //echo var_dump(get_defined_vars());*/

// NOPE. 2e tentative.

if(isset($_POST['getTitu'])){
    //echo $_POST['getTitu'];
    $listeTitu= $_POST['getTitu'];
    $titulaires = array();
    $listeTitu = parse_str($listeTitu, $titulaires);

    $testImplode = implode(',', $titulaires["Titulaires"]);
    $testExplode = explode(',', $testImplode);

    //$numMatch = $_POST['numMatch'];

    $str = $_POST['numMatch'];
    //$idMatch = preg_replace('/\D/', '', $str);

    $idMatch = filter_var($str, FILTER_SANITIZE_NUMBER_INT);

    for ($i=0; $i<count($testExplode); $i++){
        $JDAO = new JoueursDAO();
        if($testExplode[$i]!=''){
            $JDAO->participe($idMatch, $testExplode[$i], "Titulaire");
        }


        //echo $testExplode[$i];
    }
    //echo $testExplode[1];
}

if(isset($_POST['getRemp'])){
    $listeRemp= $_POST['getRemp'];
    $remplacants = array();
    $listeRemp = parse_str($listeRemp, $remplacants);

    $testImplode = implode(',', $remplacants["Remplacants"]);
    $testExplode = explode(',', $testImplode);

    $str = $_POST['numMatch'];
    $idMatch = filter_var($str, FILTER_SANITIZE_NUMBER_INT);

    for ($i=0; $i<count($testExplode); $i++){
        $JDAO = new JoueursDAO();
        if($testExplode[$i]!=''){
            $JDAO->participe($idMatch, $testExplode[$i], "Remplacant");
        }
    }
}