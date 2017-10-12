<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class TeamBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;
    
    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
}
