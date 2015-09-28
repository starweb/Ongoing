<?php

namespace Ongoing;

class TypeClass
{

    /**
     * @var TypeOperation $TypeOperation
     */
    protected $TypeOperation = null;

    /**
     * @var TypeIdentification $TypeIdentification
     */
    protected $TypeIdentification = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param TypeOperation $TypeOperation
     * @param TypeIdentification $TypeIdentification
     */
    public function __construct($TypeOperation, $TypeIdentification)
    {
      $this->TypeOperation = $TypeOperation;
      $this->TypeIdentification = $TypeIdentification;
    }

    /**
     * @return TypeOperation
     */
    public function getTypeOperation()
    {
      return $this->TypeOperation;
    }

    /**
     * @param TypeOperation $TypeOperation
     * @return \Ongoing\TypeClass
     */
    public function setTypeOperation($TypeOperation)
    {
      $this->TypeOperation = $TypeOperation;
      return $this;
    }

    /**
     * @return TypeIdentification
     */
    public function getTypeIdentification()
    {
      return $this->TypeIdentification;
    }

    /**
     * @param TypeIdentification $TypeIdentification
     * @return \Ongoing\TypeClass
     */
    public function setTypeIdentification($TypeIdentification)
    {
      $this->TypeIdentification = $TypeIdentification;
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
     * @return \Ongoing\TypeClass
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
     * @return \Ongoing\TypeClass
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
