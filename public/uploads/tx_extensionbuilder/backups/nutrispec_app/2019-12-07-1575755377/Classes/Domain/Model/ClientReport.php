<?php
namespace GroupProject\NutrispecApp\Domain\Model;


/***
 *
 * This file is part of the "NutriSpec App" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Kunal Harkare <kunal.harkare@hof-university.de>
 *
 ***/
/**
 * ClientReport
 */
class ClientReport extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     */
    protected $title = '';

    /**
     * report
     * 
     * @var string
     */
    protected $report = '';

    /**
     * client
     * 
     * @var \GroupProject\NutrispecApp\Domain\Model\Clients
     */
    protected $client = null;

    /**
     * nutritionist
     * 
     * @var \GroupProject\NutrispecApp\Domain\Model\Nutritionist
     */
    protected $nutritionist = null;

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the report
     * 
     * @return string $report
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * Sets the report
     * 
     * @param string $report
     * @return void
     */
    public function setReport($report)
    {
        $this->report = $report;
    }

    /**
     * Returns the client
     * 
     * @return \GroupProject\NutrispecApp\Domain\Model\Clients $client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Sets the client
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Clients $client
     * @return void
     */
    public function setClient(\GroupProject\NutrispecApp\Domain\Model\Clients $client)
    {
        $this->client = $client;
    }

    /**
     * Returns the nutritionist
     * 
     * @return \GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist
     */
    public function getNutritionist()
    {
        return $this->nutritionist;
    }

    /**
     * Sets the nutritionist
     * 
     * @param \GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist
     * @return void
     */
    public function setNutritionist(\GroupProject\NutrispecApp\Domain\Model\Nutritionist $nutritionist)
    {
        $this->nutritionist = $nutritionist;
    }
}
