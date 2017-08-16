<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 16.08.17
 * Time: 11:30
 */

namespace RIPS\ConnectorBundle\Entities;


class ApplicationEntity
{
    // @var int
    protected $id;

    // @var string
    protected $applicationName;

    // @var integer
    protected $currentScan;

    // @var string
    protected $creation;

    // @var int
    protected $organisation;

    /**
     * Set id
     *
     * @param int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set applicationName
     *
     * @param string $applicationName
     * @return void
     */
    public function setApplicationName(string $applicationName)
    {
        $this->applicationName = $applicationName;
    }

    /**
     * Get applicationName
     *
     * @return string
     */
    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    /**
     * Set currentScan
     *
     * @param int
     * @return void
     */
    public function setCurrentScan(int $currentScan)
    {
        $this->currentScan = $currentScan;
    }

    /**
     * Get currentScan
     *
     * @return int
     */

    public function gettCurrentScan(): int
    {
        return $this->currentScan;
    }

    /**
     * Set creation
     *
     * @param string
     * @return void
     */
    public function setCreation(string $creation)
    {
        $this->creation = $creation;
    }

    /**
     * Get creation
     *
     * @return string
     */
    public function getCreation(): string
    {
        return $this->creation;
    }

    /**
     * Set organisation
     *
     * @param int
     * @return void
     */
    public function setOrganisation(int $organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * Get organisation
     *
     * @return int
     */
    public function getOrganisation(): int
    {
        return $this->organisation;
    }
}