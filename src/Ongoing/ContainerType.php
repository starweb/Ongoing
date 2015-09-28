<?php

namespace Ongoing;

class ContainerType
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $IsContainer
     */
    protected $IsContainer = null;

    /**
     * @var boolean $IsTrailer
     */
    protected $IsTrailer = null;

    /**
     * @param boolean $IsContainer
     * @param boolean $IsTrailer
     */
    public function __construct($IsContainer, $IsTrailer)
    {
      $this->IsContainer = $IsContainer;
      $this->IsTrailer = $IsTrailer;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Ongoing\ContainerType
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Ongoing\ContainerType
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsContainer()
    {
      return $this->IsContainer;
    }

    /**
     * @param boolean $IsContainer
     * @return \Ongoing\ContainerType
     */
    public function setIsContainer($IsContainer)
    {
      $this->IsContainer = $IsContainer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTrailer()
    {
      return $this->IsTrailer;
    }

    /**
     * @param boolean $IsTrailer
     * @return \Ongoing\ContainerType
     */
    public function setIsTrailer($IsTrailer)
    {
      $this->IsTrailer = $IsTrailer;
      return $this;
    }

}
