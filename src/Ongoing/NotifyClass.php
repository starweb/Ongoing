<?php

namespace Ongoing;

class NotifyClass
{

    /**
     * @var boolean $ToBeNotified
     */
    protected $ToBeNotified = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getToBeNotified()
    {
      return $this->ToBeNotified;
    }

    /**
     * @param boolean $ToBeNotified
     * @return \Ongoing\NotifyClass
     */
    public function setToBeNotified($ToBeNotified)
    {
      $this->ToBeNotified = $ToBeNotified;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Ongoing\NotifyClass
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

}
