<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan;

class ReviewEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var DateTime
     */
    protected $submission;

    /**
     * @var Scan\Issue\Review\TypeEntity
     */
    protected $type;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var Scan\IssueEntity
     */
    protected $issue;

    /**
     * Set id
     *
     * @param integer
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set submission
     *
     * @param DateTime $submission
     * @return $this
     */
    public function setSubmission($submission)
    {
        $this->submission = $submission;

        return $this;
    }

    /**
     * Get submission
     *
     * @return DateTime
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    /**
     * Set type
     *
     * @param Scan\Issue\Review\TypeEntity $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return Scan\Issue\Review\TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return UserEntity
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set issue
     *
     * @param Scan\IssueEntity $issue
     * @return $this
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return Scan\IssueEntity
     */
    public function getIssue()
    {
        return $this->issue;
    }
}
