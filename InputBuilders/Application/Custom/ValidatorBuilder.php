<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Custom;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ValidatorBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $parameter;

    /**
     * @var string
     */
    protected $characters;
    
    /**
     * Set class
     *
     * @param string $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->setFields[] = 'class';
        $this->class = $class;
    
        return $this;
    }
    
    /**
     * Set method
     *
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->setFields[] = 'method';
        $this->method = $method;
    
        return $this;
    }
    
    /**
     * Set parameter
     *
     * @param string $parameter
     * @return $this
     */
    public function setParameter($parameter)
    {
        $this->setFields[] = 'parameter';
        $this->parameter = $parameter;
    
        return $this;
    }
    
    /**
     * Set characters
     *
     * @param string $characters
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->setFields[] = 'characters';
        $this->characters = $characters;
    
        return $this;
    }
}
