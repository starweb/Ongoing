<?php

namespace Ongoing;

class InOrderUpdateIdentification
{

    /**
     * @var InOrderUpdateIdentificationType $InOrderIdentificationType
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
     * @param InOrderUpdateIdentificationType $InOrderIdentificationType
     */
    public function __construct($InOrderIdentificationType)
    {
      $this->InOrderIdentificationType = $InOrderIdentificationType;
    }

    /**
     * @return InOrderUpdateIdentificationType
     */
    public function getInOrderIdentificationType()
    {
      return $this->InOrderIdentificationType;
    }

    /**
     * @param InOrderUpdateIdentificationType $InOrderIdentificationType
     * @return \Ongoing\InOrderUpdateIdentification
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
     * @return \Ongoing\InOrderUpdateIdentification
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
     * @return \Ongoing\InOrderUpdateIdentification
     */
    public function setInOrderId($InOrderId)
    {
      $this->InOrderId = $InOrderId;
      return $this;
    }

}
