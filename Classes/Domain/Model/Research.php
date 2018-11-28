<?php

namespace HistInst\ResearchProjects\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Research extends AbstractEntity
{

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $titel = '';


    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $vorname = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $name = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $weitere = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $projekttitel = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $abteilung = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $foerderung = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $betreuer = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $betreuerURL = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $nameURL = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $projektURL = '';

    /**
     * The name of the product
     *
     * @var string
     **/
    protected  $laufzeit = '';

    /**
     * Research constructor.
     * @param string $titel
     * @param string $vorname
     * @param string $name
     * @param string $weitere
     * @param string $projekttitel
     * @param string $abteilung
     * @param string $foerderung
     * @param string $betreuer
     * @param string $betreuerURL
     * @param string $nameURL
     * @param string $projektURL
     * @param string $laufzeit
     */
    public function __construct($titel = '', $vorname = '', $name = '', $weitere = '', $projekttitel = '', $abteilung = '', $foerderung = '', $betreuer = '', $betreuerURL = '', $nameURL = '', $projektURL = '', $laufzeit = '')
    {
        $this->setTitel($titel);
        $this->setVorname($vorname);
        $this->setName($name);
        $this->setWeitere($weitere);
        $this->setProjekttitel($projekttitel);
        $this->setAbteilung($abteilung);
        $this->setFoerderung($foerderung);
        $this->setBetreuer($betreuer);
        $this->setBetreuerURL($betreuerURL);
        $this->setNameURL($nameURL);
        $this->setProjektURL($projektURL);
        $this->setLaufzeit($laufzeit);
    }

    /**
     * @return string
     */
    public function getTitel()
    {
        return $this->titel;
    }

    /**
     * @param string $titel
     */
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }

    /**
     * @return string
     */
    public function getVorname()
    {
        return $this->vorname;
    }

    /**
     * @param string $vorname
     */
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getWeitere()
    {
        return $this->weitere;
    }

    /**
     * @param string $weitere
     */
    public function setWeitere($weitere)
    {
        $this->weitere = $weitere;
    }

    /**
     * @return string
     */
    public function getProjekttitel()
    {
        return $this->projekttitel;
    }

    /**
     * @param string $projekttitel
     */
    public function setProjekttitel($projekttitel)
    {
        $this->projekttitel = $projekttitel;
    }

    /**
     * @return string
     */
    public function getAbteilung()
    {
        return $this->abteilung;
    }

    /**
     * @param string $abteilung
     */
    public function setAbteilung($abteilung)
    {
        $this->abteilung = $abteilung;
    }

    /**
     * @return string
     */
    public function getFoerderung()
    {
        return $this->foerderung;
    }

    /**
     * @param string $foerderung
     */
    public function setFoerderung($foerderung)
    {
        $this->foerderung = $foerderung;
    }

    /**
     * @return string
     */
    public function getBetreuer()
    {
        return $this->betreuer;
    }

    /**
     * @param string $betreuer
     */
    public function setBetreuer($betreuer)
    {
        $this->betreuer = $betreuer;
    }

    /**
     * @return string
     */
    public function getBetreuerURL()
    {
        return $this->betreuerURL;
    }

    /**
     * @param string $betreuerURL
     */
    public function setBetreuerURL($betreuerURL)
    {
        $this->betreuerURL = $betreuerURL;
    }

    /**
     * @return string
     */
    public function getNameURL()
    {
        return $this->nameURL;
    }

    /**
     * @param string $nameURL
     */
    public function setNameURL($nameURL)
    {
        $this->nameURL = $nameURL;
    }

    /**
     * @return string
     */
    public function getProjektURL()
    {
        return $this->projektURL;
    }

    /**
     * @param string $projektURL
     */
    public function setProjektURL($projektURL)
    {
        $this->projektURL = $projektURL;
    }

    /**
     * @return string
     */
    public function getLaufzeit()
    {
        return $this->laufzeit;
    }

    /**
     * @param string $laufzeit
     */
    public function setLaufzeit($laufzeit)
    {
        $this->laufzeit = $laufzeit;
    }






}
