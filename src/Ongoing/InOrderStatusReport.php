<?php

namespace Ongoing;

class InOrderStatusReport
{

    /**
     * @var int $InOrderId
     */
    protected $InOrderId = null;

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var string $GoodsOwnerInOrderNumber
     */
    protected $GoodsOwnerInOrderNumber = null;

    /**
     * @var \DateTime $ReceiveTime
     */
    protected $ReceiveTime = null;

    /**
     * @var \DateTime $InDate
     */
    protected $InDate = null;

    /**
     * @var string $GoodsOwnerReferenceNumber
     */
    protected $GoodsOwnerReferenceNumber = null;

    /**
     * @var int $InOrderStatusNumber
     */
    protected $InOrderStatusNumber = null;

    /**
     * @var string $OrderStatusText
     */
    protected $OrderStatusText = null;

    /**
     * @var float $ReceivedNumberOfItems
     */
    protected $ReceivedNumberOfItems = null;

    /**
     * @var float $AdvisedNumberOfItems
     */
    protected $AdvisedNumberOfItems = null;

    /**
     * @param int $InOrderId
     * @param int $GoodsOwnerId
     * @param int $InOrderStatusNumber
     * @param float $ReceivedNumberOfItems
     * @param float $AdvisedNumberOfItems
     */
    public function __construct($InOrderId, $GoodsOwnerId, $InOrderStatusNumber, $ReceivedNumberOfItems, $AdvisedNumberOfItems)
    {
      $this->InOrderId = $InOrderId;
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->InOrderStatusNumber = $InOrderStatusNumber;
      $this->ReceivedNumberOfItems = $ReceivedNumberOfItems;
      $this->AdvisedNumberOfItems = $AdvisedNumberOfItems;
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
     * @return \Ongoing\InOrderStatusReport
     */
    public function setInOrderId($InOrderId)
    {
      $this->InOrderId = $InOrderId;
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
     * @return \Ongoing\InOrderStatusReport
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerInOrderNumber()
    {
      return $this->GoodsOwnerInOrderNumber;
    }

    /**
     * @param string $GoodsOwnerInOrderNumber
     * @return \Ongoing\InOrderStatusReport
     */
    public function setGoodsOwnerInOrderNumber($GoodsOwnerInOrderNumber)
    {
      $this->GoodsOwnerInOrderNumber = $GoodsOwnerInOrderNumber;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReceiveTime()
    {
      if ($this->ReceiveTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ReceiveTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ReceiveTime
     * @return \Ongoing\InOrderStatusReport
     */
    public function setReceiveTime(\DateTime $ReceiveTime = null)
    {
      if ($ReceiveTime == null) {
       $this->ReceiveTime = null;
      } else {
        $this->ReceiveTime = $ReceiveTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInDate()
    {
      if ($this->InDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InDate
     * @return \Ongoing\InOrderStatusReport
     */
    public function setInDate(\DateTime $InDate = null)
    {
      if ($InDate == null) {
       $this->InDate = null;
      } else {
        $this->InDate = $InDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerReferenceNumber()
    {
      return $this->GoodsOwnerReferenceNumber;
    }

    /**
     * @param string $GoodsOwnerReferenceNumber
     * @return \Ongoing\InOrderStatusReport
     */
    public function setGoodsOwnerReferenceNumber($GoodsOwnerReferenceNumber)
    {
      $this->GoodsOwnerReferenceNumber = $GoodsOwnerReferenceNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderStatusNumber()
    {
      return $this->InOrderStatusNumber;
    }

    /**
     * @param int $InOrderStatusNumber
     * @return \Ongoing\InOrderStatusReport
     */
    public function setInOrderStatusNumber($InOrderStatusNumber)
    {
      $this->InOrderStatusNumber = $InOrderStatusNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderStatusText()
    {
      return $this->OrderStatusText;
    }

    /**
     * @param string $OrderStatusText
     * @return \Ongoing\InOrderStatusReport
     */
    public function setOrderStatusText($OrderStatusText)
    {
      $this->OrderStatusText = $OrderStatusText;
      return $this;
    }

    /**
     * @return float
     */
    public function getReceivedNumberOfItems()
    {
      return $this->ReceivedNumberOfItems;
    }

    /**
     * @param float $ReceivedNumberOfItems
     * @return \Ongoing\InOrderStatusReport
     */
    public function setReceivedNumberOfItems($ReceivedNumberOfItems)
    {
      $this->ReceivedNumberOfItems = $ReceivedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdvisedNumberOfItems()
    {
      return $this->AdvisedNumberOfItems;
    }

    /**
     * @param float $AdvisedNumberOfItems
     * @return \Ongoing\InOrderStatusReport
     */
    public function setAdvisedNumberOfItems($AdvisedNumberOfItems)
    {
      $this->AdvisedNumberOfItems = $AdvisedNumberOfItems;
      return $this;
    }

}
