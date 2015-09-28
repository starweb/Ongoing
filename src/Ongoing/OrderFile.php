<?php

namespace Ongoing;

class OrderFile
{

    /**
     * @var File $File
     */
    protected $File = null;

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var OrderFileIdentificationType $OrderFileIdentificationType
     */
    protected $OrderFileIdentificationType = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var string $GoodsOwnerOrderId
     */
    protected $GoodsOwnerOrderId = null;

    /**
     * @var int $OrderSystemId
     */
    protected $OrderSystemId = null;

    /**
     * @param int $GoodsOwnerId
     * @param OrderFileIdentificationType $OrderFileIdentificationType
     */
    public function __construct($GoodsOwnerId, $OrderFileIdentificationType)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->OrderFileIdentificationType = $OrderFileIdentificationType;
    }

    /**
     * @return File
     */
    public function getFile()
    {
      return $this->File;
    }

    /**
     * @param File $File
     * @return \Ongoing\OrderFile
     */
    public function setFile($File)
    {
      $this->File = $File;
      return $this;
    }

    /**
     * @return int
     */
    public function getGoodsOwnerId()
    {
      return $this->GoodsOwnerId;
    }

    /**
     * @param int $GoodsOwnerId
     * @return \Ongoing\OrderFile
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return OrderFileIdentificationType
     */
    public function getOrderFileIdentificationType()
    {
      return $this->OrderFileIdentificationType;
    }

    /**
     * @param OrderFileIdentificationType $OrderFileIdentificationType
     * @return \Ongoing\OrderFile
     */
    public function setOrderFileIdentificationType($OrderFileIdentificationType)
    {
      $this->OrderFileIdentificationType = $OrderFileIdentificationType;
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
     * @return \Ongoing\OrderFile
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderId()
    {
      return $this->GoodsOwnerOrderId;
    }

    /**
     * @param string $GoodsOwnerOrderId
     * @return \Ongoing\OrderFile
     */
    public function setGoodsOwnerOrderId($GoodsOwnerOrderId)
    {
      $this->GoodsOwnerOrderId = $GoodsOwnerOrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderSystemId()
    {
      return $this->OrderSystemId;
    }

    /**
     * @param int $OrderSystemId
     * @return \Ongoing\OrderFile
     */
    public function setOrderSystemId($OrderSystemId)
    {
      $this->OrderSystemId = $OrderSystemId;
      return $this;
    }

}
