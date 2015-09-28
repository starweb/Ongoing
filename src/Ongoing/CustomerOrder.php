<?php

namespace Ongoing;

class CustomerOrder
{

    /**
     * @var OrderInfoClass $OrderInfo
     */
    protected $OrderInfo = null;

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var Customer $Customer
     */
    protected $Customer = null;

    /**
     * @var CommunicationInfo $CommunicationInfo
     */
    protected $CommunicationInfo = null;

    /**
     * @var TransporterContractClass $TransporterContract
     */
    protected $TransporterContract = null;

    /**
     * @var ArrayOfCustomerOrderLine $CustomerOrderLines
     */
    protected $CustomerOrderLines = null;

    /**
     * @var ArrayOfCustomerOrderTextLine $CustomerOrderTextLines
     */
    protected $CustomerOrderTextLines = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderInfoClass
     */
    public function getOrderInfo()
    {
      return $this->OrderInfo;
    }

    /**
     * @param OrderInfoClass $OrderInfo
     * @return \Ongoing\CustomerOrder
     */
    public function setOrderInfo($OrderInfo)
    {
      $this->OrderInfo = $OrderInfo;
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
     * @return \Ongoing\CustomerOrder
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return Customer
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param Customer $Customer
     * @return \Ongoing\CustomerOrder
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
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
     * @return \Ongoing\CustomerOrder
     */
    public function setCommunicationInfo($CommunicationInfo)
    {
      $this->CommunicationInfo = $CommunicationInfo;
      return $this;
    }

    /**
     * @return TransporterContractClass
     */
    public function getTransporterContract()
    {
      return $this->TransporterContract;
    }

    /**
     * @param TransporterContractClass $TransporterContract
     * @return \Ongoing\CustomerOrder
     */
    public function setTransporterContract($TransporterContract)
    {
      $this->TransporterContract = $TransporterContract;
      return $this;
    }

    /**
     * @return ArrayOfCustomerOrderLine
     */
    public function getCustomerOrderLines()
    {
      return $this->CustomerOrderLines;
    }

    /**
     * @param ArrayOfCustomerOrderLine $CustomerOrderLines
     * @return \Ongoing\CustomerOrder
     */
    public function setCustomerOrderLines($CustomerOrderLines)
    {
      $this->CustomerOrderLines = $CustomerOrderLines;
      return $this;
    }

    /**
     * @return ArrayOfCustomerOrderTextLine
     */
    public function getCustomerOrderTextLines()
    {
      return $this->CustomerOrderTextLines;
    }

    /**
     * @param ArrayOfCustomerOrderTextLine $CustomerOrderTextLines
     * @return \Ongoing\CustomerOrder
     */
    public function setCustomerOrderTextLines($CustomerOrderTextLines)
    {
      $this->CustomerOrderTextLines = $CustomerOrderTextLines;
      return $this;
    }

}
