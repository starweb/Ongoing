<?php

namespace Ongoing;

class UpdateInOrderIdentification
{

    /**
     * @var UpdateInOrderIdentificationType $InOrderIdentificationType
     */
    protected $InOrderIdentificationType = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var int $InOrderId
     */
    protected $InOrderId = null;

    /**
     * @param UpdateInOrderIdentificationType $InOrderIdentificationType
     * @param int $InOrderId
     */
    public function __construct($InOrderIdentificationType, $InOrderId)
    {
      $this->InOrderIdentificationType = $InOrderIdentificationType;
      $this->InOrderId = $InOrderId;
    }

    /**
     * @return UpdateInOrderIdentificationType
     */
    public function getInOrderIdentificationType()
    {
      return $this->InOrderIdentificationType;
    }

    /**
     * @param UpdateInOrderIdentificationType $InOrderIdentificationType
     * @return \Ongoing\UpdateInOrderIdentification
     */
    public function setInOrderIdentificationType($InOrderIdentificationType)
    {
      $this->InOrderIdentificationType = $InOrderIdentificationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderNumber()
    {
      return $this->GoodsOwnerOrderNumber;
    }

    /**
     * @param string $GoodsOwnerOrderNumber
     * @return \Ongoing\UpdateInOrderIdentification
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderId()
    {
      return $this->InOrderId;
    }

    /**
     * @param int $InOrderId
     * @return \Ongoing\UpdateInOrderIdentification
     */
    public function setInOrderId($InOrderId)
    {
      $this->InOrderId = $InOrderId;
      return $this;
    }

}
