<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jules.C
 * Date: 08/01/14
 * Time: 17:20
 * To change this template use File | Settings | File Templates.
 */

class Joueurs {

    private $_idJou;
    private $_NumJou;
    private $_nomJou;
    private $_prenomJou;
    private $_AdresseJou;
    private $_CPJou;
    private $_VilleJou;
    private $_TelJou;
    private $_MailJou;
    private $_Date_NaissJou;
    private $_PhotoJou;
    private $_NumClub;

    function __construct()
    {
    }

    /**
     * @param mixed $idJou
     */
    public function setIdJou($idJou)
    {
        $this->_idJou = $idJou;
    }

    /**
     * @return mixed
     */
    public function getIdJou()
    {
        return $this->_idJou;
    }


    /**
     * @param mixed $AdresseJou
     */
    public function setAdresseJou($AdresseJou)
    {
        $this->_AdresseJou = $AdresseJou;
    }

    /**
     * @return mixed
     */
    public function getAdresseJou()
    {
        return $this->_AdresseJou;
    }

    /**
     * @param mixed $CPJou
     */
    public function setCPJou($CPJou)
    {
        $this->_CPJou = $CPJou;
    }

    /**
     * @return mixed
     */
    public function getCPJou()
    {
        return $this->_CPJou;
    }

    /**
     * @param mixed $Date_NaissJou
     */
    public function setDateNaissJou($Date_NaissJou)
    {
        $this->_Date_NaissJou = $Date_NaissJou;
    }

    /**
     * @return mixed
     */
    public function getDateNaissJou()
    {
        return $this->_Date_NaissJou;
    }

    /**
     * @param mixed $MailJou
     */
    public function setMailJou($MailJou)
    {
        $this->_MailJou = $MailJou;
    }

    /**
     * @return mixed
     */
    public function getMailJou()
    {
        return $this->_MailJou;
    }

    /**
     * @param mixed $NumClub
     */
    public function setNumClub($NumClub)
    {
        $this->_NumClub = $NumClub;
    }

    /**
     * @return mixed
     */
    public function getNumClub()
    {
        return $this->_NumClub;
    }

    /**
     * @param mixed $PhotoJou
     */
    public function setPhotoJou($PhotoJou)
    {
        $this->_PhotoJou = $PhotoJou;
    }

    /**
     * @return mixed
     */
    public function getPhotoJou()
    {
        return $this->_PhotoJou;
    }

    /**
     * @param mixed $TelJou
     */
    public function setTelJou($TelJou)
    {
        $this->_TelJou = $TelJou;
    }

    /**
     * @return mixed
     */
    public function getTelJou()
    {
        return $this->_TelJou;
    }

    /**
     * @param mixed $VilleJou
     */
    public function setVilleJou($VilleJou)
    {
        $this->_VilleJou = $VilleJou;
    }

    /**
     * @return mixed
     */
    public function getVilleJou()
    {
        return $this->_VilleJou;
    }

    /**
     * @param mixed $NumJou
     */
    public function setNumJou($NumJou)
    {
        $this->_NumJou = $NumJou;
    }

    /**
     * @return mixed
     */
    public function getNumJou()
    {
        return $this->_NumJou;
    }

    /**
     * @param mixed $idJou
     */

    /**
     * @param mixed $nomJou
     */
    public function setNomJou($nomJou)
    {
        $this->_nomJou = $nomJou;
    }

    /**
     * @return mixed
     */
    public function getNomJou()
    {
        return $this->_nomJou;
    }

    /**
     * @param mixed $prenomJou
     */
    public function setPrenomJou($prenomJou)
    {
        $this->_prenomJou = $prenomJou;
    }

    /**
     * @return mixed
     */
    public function getPrenomJou()
    {
        return $this->_prenomJou;
    }


}