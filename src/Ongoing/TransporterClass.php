<?php

namespace Ongoing;

class TransporterClass
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $ServiceCode
     */
    protected $ServiceCode = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @param int $Id
     */
    public function __construct($Id)
    {
      $this->Id = $Id;
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
     * @return \Ongoing\TransporterClass
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
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
     * @return \Ongoing\TransporterClass
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
      return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return \Ongoing\TransporterClass
     */
    public function setServiceCode($ServiceCode)
    {
      $this->ServiceCode = $ServiceCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Ongoing\TransporterClass
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

}
