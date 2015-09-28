<?php

namespace Ongoing;

class InOrderType
{

    /**
     * @var InOrderTypeOperation $InOrderTypeOperation
     */
    protected $InOrderTypeOperation = null;

    /**
     * @var InOrderTypeIdentification $InOrderTypeIdentification
     */
    protected $InOrderTypeIdentification = null;

    /**
     * @var string $InOrderTypeCode
     */
    protected $InOrderTypeCode = null;

    /**
     * @var string $InOrderTypeName
     */
    protected $InOrderTypeName = null;

    /**
     * @param InOrderTypeOperation $InOrderTypeOperation
     * @param InOrderTypeIdentification $InOrderTypeIdentification
     */
    public function __construct($InOrderTypeOperation, $InOrderTypeIdentification)
    {
      $this->InOrderTypeOperation = $InOrderTypeOperation;
      $this->InOrderTypeIdentification = $InOrderTypeIdentification;
    }

    /**
     * @return InOrderTypeOperation
     */
    public function getInOrderTypeOperation()
    {
      return $this->InOrderTypeOperation;
    }

    /**
     * @param InOrderTypeOperation $InOrderTypeOperation
     * @return \Ongoing\InOrderType
     */
    public function setInOrderTypeOperation($InOrderTypeOperation)
    {
      $this->InOrderTypeOperation = $InOrderTypeOperation;
      return $this;
    }

    /**
     * @return InOrderTypeIdentification
     */
    public function getInOrderTypeIdentification()
    {
      return $this->InOrderTypeIdentification;
    }

    /**
     * @param InOrderTypeIdentification $InOrderTypeIdentification
     * @return \Ongoing\InOrderType
     */
    public function setInOrderTypeIdentification($InOrderTypeIdentification)
    {
      $this->InOrderTypeIdentification = $InOrderTypeIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderTypeCode()
    {
      return $this->InOrderTypeCode;
    }

    /**
     * @param string $InOrderTypeCode
     * @return \Ongoing\InOrderType
     */
    public function setInOrderTypeCode($InOrderTypeCode)
    {
      $this->InOrderTypeCode = $InOrderTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrderTypeName()
    {
      return $this->InOrderTypeName;
    }

    /**
     * @param string $InOrderTypeName
     * @return \Ongoing\InOrderType
     */
    public function setInOrderTypeName($InOrderTypeName)
    {
      $this->InOrderTypeName = $InOrderTypeName;
      return $this;
    }

}
