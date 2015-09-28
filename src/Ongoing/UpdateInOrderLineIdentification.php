<?php

namespace Ongoing;

class UpdateInOrderLineIdentification
{

    /**
     * @var UpdateInOrderLineIdentificationType $InOrderLineIdentificationType
     */
    protected $InOrderLineIdentificationType = null;

    /**
     * @var string $ExternalOrderLineCode
     */
    protected $ExternalOrderLineCode = null;

    /**
     * @var int $InOrderLineId
     */
    protected $InOrderLineId = null;

    /**
     * @param UpdateInOrderLineIdentificationType $InOrderLineIdentificationType
     */
    public function __construct($InOrderLineIdentificationType)
    {
      $this->InOrderLineIdentificationType = $InOrderLineIdentificationType;
    }

    /**
     * @return UpdateInOrderLineIdentificationType
     */
    public function getInOrderLineIdentificationType()
    {
      return $this->InOrderLineIdentificationType;
    }

    /**
     * @param UpdateInOrderLineIdentificationType $InOrderLineIdentificationType
     * @return \Ongoing\UpdateInOrderLineIdentification
     */
    public function setInOrderLineIdentificationType($InOrderLineIdentificationType)
    {
      $this->InOrderLineIdentificationType = $InOrderLineIdentificationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalOrderLineCode()
    {
      return $this->ExternalOrderLineCode;
    }

    /**
     * @param string $ExternalOrderLineCode
     * @return \Ongoing\UpdateInOrderLineIdentification
     */
    public function setExternalOrderLineCode($ExternalOrderLineCode)
    {
      $this->ExternalOrderLineCode = $ExternalOrderLineCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderLineId()
    {
      return $this->InOrderLineId;
    }

    /**
     * @param int $InOrderLineId
     * @return \Ongoing\UpdateInOrderLineIdentification
     */
    public function setInOrderLineId($InOrderLineId)
    {
      $this->InOrderLineId = $InOrderLineId;
      return $this;
    }

}
