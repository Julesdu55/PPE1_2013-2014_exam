<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jules.C
 * Date: 08/01/14
 * Time: 16:53
 * To change this template use File | Settings | File Templates.
 */

class Match {

private $_numMatch;
private $_dateMatch;
private $_epreuveMatch;
private $_club1;
private $_club2;

    function __construct()
    {
    }

    /**
     * @param mixed $club1
     */
    public function setClub1($club1)
    {
        $this->_club1 = $club1;
    }

    /**
     * @return mixed
     */
    public function getClub1()
    {
        return $this->_club1;
    }

    /**
     * @param mixed $club2
     */
    public function setClub2($club2)
    {
        $this->_club2 = $club2;
    }

    /**
     * @return mixed
     */
    public function getClub2()
    {
        return $this->_club2;
    }

    /**
     * @param mixed $dateMatch
     */
    public function setDateMatch($dateMatch)
    {
        $this->_dateMatch = $dateMatch;
    }

    /**
     * @return mixed
     */
    public function getDateMatch()
    {
        return $this->_dateMatch;
    }

    /**
     * @param mixed $epreuveMatch
     */
    public function setEpreuveMatch($epreuveMatch)
    {
        $this->_epreuveMatch = $epreuveMatch;
    }

    /**
     * @return mixed
     */
    public function getEpreuveMatch()
    {
        return $this->_epreuveMatch;
    }

    /**
     * @param mixed $numMatch
     */
    public function setNumMatch($numMatch)
    {
        $this->_numMatch = $numMatch;
    }

    /**
     * @return mixed
     */
    public function getNumMatch()
    {
        return $this->_numMatch;
    }

    public function toString() {
        return array(
            1  => $this->getNumMatch(),
            2 =>$this->getDateMatch(),
            3 => $this->getEpreuveMatch(),
            4 => $this->getClub1(),
            5 => $this->getClub2(),

        );
    }




}