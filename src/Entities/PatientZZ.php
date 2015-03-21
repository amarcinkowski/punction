<?php
/**
 * PatientZZ
 *
 * THIS MATERIAL IS PROVIDED AS IS, WITH ABSOLUTELY NO WARRANTY EXPRESSED
 * OR IMPLIED. ANY USE IS AT YOUR OWN RISK.
 *
 * Permission is hereby granted to use or copy this program
 * for any purpose, provided the above notices are retained on all copies.
 * Permission to modify the code and to distribute modified code is granted,
 * provided the above notices are retained, and a notice that the code was
 * modified is included with the above copyright notice.
 *
 * @category  Wp
 * @package   Punction
 * @author    Andrzej Marcinkowski <andrzej.max.marcinkowski@gmail.com>
 * @copyright 2014 Wojewódzki Szpital Zespolony, Kalisz
 * @license   MIT http://opensource.org/licenses/MIT
 * @version   1.0 $Format:%H$
 * @link      http://
 * @since     File available since Release 1.0.0
 * PHP Version 5
 */
namespace Punction\Entities;

/**
 * PatientZZ
 *
 * @category  Wp
 * @package   Punction
 * @author    Andrzej Marcinkowski <andrzej.max.marcinkowski@gmail.com>
 * @copyright 2014 Wojewódzki Szpital Zespolony, Kalisz
 * @license   MIT http://opensource.org/licenses/MIT
 * @version   1.0 $Format:%H$
 * @link      http://
 * @since     File available since Release 1.0.0
 *      
 * @Entity
 */
class PatientZZ extends Patient
{

    /**
     * @var string $typ typ pacjenta
     */
    protected $typ = "ZZ";

    /**
     * @Column(columnDefinition="TINYINT(4) DEFAULT 0") *
     */
    public $aktywnoscFizyczna;

    /**
     * @Column(columnDefinition="TINYINT(4) DEFAULT 0") *
     */
    public $higiena;

    /**
     * @Column(columnDefinition="TINYINT(4) DEFAULT 0") *
     */
    public $odzywianie;

    /**
     * @Column(columnDefinition="TINYINT(4) DEFAULT 0") *
     */
    public $wydalanie;

    /**
     * @Column(columnDefinition="TINYINT(4) DEFAULT 0") *
     */
    public $pomiarObjawowZyciowych;

    /**
     * @Column(columnDefinition="TINYINT(4) DEFAULT 0") *
     */
    public $leczenie;

    /**
     * @Column(columnDefinition="TINYINT(4) DEFAULT 0") *
     */
    public $edukacjaIWsparciePsychiczne;
    //
    /**
     * @return aktywnoscFizyczna
     */
    public function getAktywnoscFizyczna()
    {
        return $this->aktywnoscFizyczna;
    }

    /**
     * @param int $aktywnoscFizyczna int aktywnoscFizyczna
     * @return PatientZZ
     */
    public function setAktywnoscFizyczna($aktywnoscFizyczna)
    {
        $this->aktywnoscFizyczna = $aktywnoscFizyczna;
        return $this;
    }

    /**
     * @return higiena
     */
    public function getHigiena()
    {
        return $this->higiena;
    }

    /**
     * @param int $higiena int higiena
     * @return PatientZZ
     */
    public function setHigiena($higiena)
    {
        $this->higiena = $higiena;
        return $this;
    }

    /**
     * @return odzywianie
     */
    public function getOdzywianie()
    {
        return $this->odzywianie;
    }

    /**
     * @param  int $odzywianie int odzywianie
     * @return PatientZZ
     */
    public function setOdzywianie($odzywianie)
    {
        $this->odzywianie = $odzywianie;
        return $this;
    }

    /**
     * @return wydalanie
     */
    public function getWydalanie()
    {
        return $this->wydalanie;
    }

    /**
     * @param  int $wydalanie int wydalanie
     * @return PatientZZ
     */
    public function setWydalanie($wydalanie)
    {
        $this->wydalanie = $wydalanie;
        return $this;
    }

    /**
     * @return pomiarObjawowZyciowych
     */
    public function getPomiarObjawowZyciowych()
    {
        return $this->pomiarObjawowZyciowych;
    }

    /**
     * @param  int $pomiarObjawowZyciowych int pomiarObjawowZyciowych
     * @return PatientZZ
     */
    public function setPomiarObjawowZyciowych($pomiarObjawowZyciowych)
    {
        $this->pomiarObjawowZyciowych = $pomiarObjawowZyciowych;
        return $this;
    }

    /**
     * @return leczenie
     */
    public function getLeczenie()
    {
        return $this->leczenie;
    }

    /**
     * @param  int $leczenie int leczenie
     * @return PatientZZ
     */
    public function setLeczenie($leczenie)
    {
        $this->leczenie = $leczenie;
        return $this;
    }

    /**
     * @return edukacjaIWsparciePsychiczne
     */
    public function getEdukacjaIWsparciePsychiczne()
    {
        return $this->edukacjaIWsparciePsychiczne;
    }

    /**
     * @param  int $edukacjaIWsparciePsychiczne int edukacjaIWsparciePsychiczne
     * @return PatientZZ
     */
    public function setEdukacjaIWsparciePsychiczne($edukacjaIWsparciePsychiczne)
    {
        $this->edukacjaIWsparciePsychiczne = $edukacjaIWsparciePsychiczne;
        return $this;
    }

    /**
     * 
     * @return multitype:string
     */
    public static function getFields()
    {
        $superFields = parent::getFields();
        $fields = array_merge($superFields, array(
            "aktywnoscFizyczna",
            "higiena",
            "odzywianie",
            "wydalanie",
            "pomiarObjawowZyciowych",
            "leczenie",
            "edukacjaIWsparciePsychiczne"
        ));
        return $fields;
    }

}
