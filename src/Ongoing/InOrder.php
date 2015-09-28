<?php

namespace Ongoing;

class InOrder
{

    /**
     * @var InOrderInfoClass $InOrderInfo
     */
    protected $InOrderInfo = null;

    /**
     * @var InOrderCustomer $InOrderCustomer
     */
    protected $InOrderCustomer = null;

    /**
     * @var InOrderSupplier $InOrderSupplier
     */
    protected $InOrderSupplier = null;

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var CommunicationInfo $CommunicationInfo
     */
    protected $CommunicationInfo = null;

    /**
     * @var ArrayOfInOrderLine $InOrderLines
     */
    protected $InOrderLines = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return InOrderInfoClass
     */
    public function getInOrderInfo()
    {
      return $this->InOrderInfo;
    }

    /**
     * @param InOrderInfoClass $InOrderInfo
     * @return \Ongoing\InOrder
     */
    public function setInOrderInfo($InOrderInfo)
    {
      $this->InOrderInfo = $InOrderInfo;
      return $this;
    }

    /**
     * @return InOrderCustomer
     */
    public function getInOrderCustomer()
    {
      return $this->InOrderCustomer;
    }

    /**
     * @param InOrderCustomer $InOrderCustomer
     * @return \Ongoing\InOrder
     */
    public function setInOrderCustomer($InOrderCustomer)
    {
      $this->InOrderCustomer = $InOrderCustomer;
      return $this;
    }

    /**
     * @return InOrderSupplier
     */
    public function getInOrderSupplier()
    {
      return $this->InOrderSupplier;
    }

    /**
     * @param InOrderSupplier $InOrderSupplier
     * @return \Ongoing\InOrder
     */
    public function setInOrderSupplier($InOrderSupplier)
    {
      $this->InOrderSupplier = $InOrderSupplier;
      return $this;
    }

    /**
     * @return GoodsOwner
     */
    public function getGoodsOwner()
    {
      return $this->GoodsOwner;
    }

    /**
     * @param GoodsOwner $GoodsOwner
     * @return \Ongoing\InOrder
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return CommunicationInfo
     */
    public function getCommunicationInfo()
    {
      return $this->CommunicationInfo;
    }

    /**
     * @param CommunicationInfo $CommunicationInfo
     * @return \Ongoing\InOrder
     */
    public function setCommunicationInfo($CommunicationInfo)
    {
      $this->CommunicationInfo = $CommunicationInfo;
      return $this;
    }

    /**
     * @return ArrayOfInOrderLine
     */
    public function getInOrderLines()
    {
      return $this->InOrderLines;
    }

    /**
     * @param ArrayOfInOrderLine $InOrderLines
     * @return \Ongoing\InOrder
     */
    public function setInOrderLines($InOrderLines)
    {
      $this->InOrderLines = $InOrderLines;
      return $this;
    }

}
