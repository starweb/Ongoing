<?php

namespace Ongoing;

class GoodsOwner
{

    /**
     * @var GoodsOwnerIdentificationType $GoodsOwnerIdentification
     */
    protected $GoodsOwnerIdentification = null;

    /**
     * @var string $GoodsOwnerCode
     */
    protected $GoodsOwnerCode = null;

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var string $FinancialCode
     */
    protected $FinancialCode = null;

    /**
     * @var string $GoodsLocationCode
     */
    protected $GoodsLocationCode = null;

    /**
     * @param GoodsOwnerIdentificationType $GoodsOwnerIdentification
     * @param int $GoodsOwnerId
     */
    public function __construct($GoodsOwnerIdentification, $GoodsOwnerId)
    {
      $this->GoodsOwnerIdentification = $GoodsOwnerIdentification;
      $this->GoodsOwnerId = $GoodsOwnerId;
    }

    /**
     * @return GoodsOwnerIdentificationType
     */
    public function getGoodsOwnerIdentification()
    {
      return $this->GoodsOwnerIdentification;
    }

    /**
     * @param GoodsOwnerIdentificationType $GoodsOwnerIdentification
     * @return \Ongoing\GoodsOwner
     */
    public function setGoodsOwnerIdentification($GoodsOwnerIdentification)
    {
      $this->GoodsOwnerIdentification = $GoodsOwnerIdentification;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerCode()
    {
      return $this->GoodsOwnerCode;
    }

    /**
     * @param string $GoodsOwnerCode
     * @return \Ongoing\GoodsOwner
     */
    public function setGoodsOwnerCode($GoodsOwnerCode)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
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
     * @return \Ongoing\GoodsOwner
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinancialCode()
    {
      return $this->FinancialCode;
    }

    /**
     * @param string $FinancialCode
     * @return \Ongoing\GoodsOwner
     */
    public function setFinancialCode($FinancialCode)
    {
      $this->FinancialCode = $FinancialCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsLocationCode()
    {
      return $this->GoodsLocationCode;
    }

    /**
     * @param string $GoodsLocationCode
     * @return \Ongoing\GoodsOwner
     */
    public function setGoodsLocationCode($GoodsLocationCode)
    {
      $this->GoodsLocationCode = $GoodsLocationCode;
      return $this;
    }

}
