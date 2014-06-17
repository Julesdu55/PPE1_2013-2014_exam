<?php

class Club {
	// Variables
	private $_id;
	private $_nom;
	private $_adresse;
    private $_cp;
    private $_ville;
    private $_tel;
    private $_mail;
    private $_img;
    private $_code;
    private $_mdp;
    private $_imgS;

    /*
     * SCHEMA DE LA BASE DE DONNEES, POUR CORRESPONDANCE NOM DES CHAMPS
`numClub` INT(11) NOT NULL AUTO_INCREMENT,
`nomClub` VARCHAR(30) NOT NULL,
`adresseClub` VARCHAR(50) NOT NULL,
`cpClub` INT(5) NOT NULL,
`villeClub` VARCHAR(30) NOT NULL,
`telClub` VARCHAR(30) NOT NULL,
`mailClub` VARCHAR(30) NOT NULL,
`imgClub` VARCHAR(50) NOT NULL,
`codeFFF` INT(11) NOT NULL,
`mdpClub` VARCHAR(8) NOT NULL,
    */

    function __construct()
    {
    }

    /**
     * @param mixed $imgS
     */
    public function setImgS($imgS)
    {
        $this->_imgS = $imgS;
    }

    /**
     * @return mixed
     */
    public function getImgS()
    {
        return $this->_imgS;
    }




    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->_adresse;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->_code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->_cp = $cp;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->_cp;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->_img = $img;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->_img;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->_mail = $mail;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->_mail;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->_mdp = $mdp;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->_mdp;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel)
    {
        $this->_tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->_tel;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->_ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->_ville;
    }



	
	public function toString() {
		return array(
				1  => $this->getId(),
				2 => $this->getNom(),
				3 => $this->getAdresse(),
				4 => $this->getCp(),
				5 => $this->getVille(),
				6 => $this->getTel(),
                7 => $this->getMail(),
                8 => $this->getImg(),
                9 => $this->getCode(),
                10 => $this->getMdp()
		);
	}

}

?>
