<?php

namespace Ongoing;

class ReceivedInOrder
{

    /**
     * @var ReceivedInOrderInfoClass $InOrderInfo
     */
    protected $InOrderInfo = null;

    /**
     * @var ReceivedInOrderSupplier $InOrderSupplier
     */
    protected $InOrderSupplier = null;

    /**
     * @var GoodsOwner $GoodsOwner
     */
    protected $GoodsOwner = null;

    /**
     * @var WsiSystem $WsiSystem
     */
    protected $WsiSystem = null;

    /**
     * @var ArrayOfReceivedInOrderLine $ReceivedInOrderLines
     */
    protected $ReceivedInOrderLines = null;

    /**
     * @var ArrayOfReceivedArticlItem $ReceivedArticleItems
     */
    protected $ReceivedArticleItems = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReceivedInOrderInfoClass
     */
    public function getInOrderInfo()
    {
      return $this->InOrderInfo;
    }

    /**
     * @param ReceivedInOrderInfoClass $InOrderInfo
     * @return \Ongoing\ReceivedInOrder
     */
    public function setInOrderInfo($InOrderInfo)
    {
      $this->InOrderInfo = $InOrderInfo;
      return $this;
    }

    /**
     * @return ReceivedInOrderSupplier
     */
    public function getInOrderSupplier()
    {
      return $this->InOrderSupplier;
    }

    /**
     * @param ReceivedInOrderSupplier $InOrderSupplier
     * @return \Ongoing\ReceivedInOrder
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
     * @return \Ongoing\ReceivedInOrder
     */
    public function setGoodsOwner($GoodsOwner)
    {
      $this->GoodsOwner = $GoodsOwner;
      return $this;
    }

    /**
     * @return WsiSystem
     */
    public function getWsiSystem()
    {
      return $this->WsiSystem;
    }

    /**
     * @param WsiSystem $WsiSystem
     * @return \Ongoing\ReceivedInOrder
     */
    public function setWsiSystem($WsiSystem)
    {
      $this->WsiSystem = $WsiSystem;
      return $this;
    }

    /**
     * @return ArrayOfReceivedInOrderLine
     */
    public function getReceivedInOrderLines()
    {
      return $this->ReceivedInOrderLines;
    }

    /**
     * @param ArrayOfReceivedInOrderLine $ReceivedInOrderLines
     * @return \Ongoing\ReceivedInOrder
     */
    public function setReceivedInOrderLines($ReceivedInOrderLines)
    {
      $this->ReceivedInOrderLines = $ReceivedInOrderLines;
      return $this;
    }

    /**
     * @return ArrayOfReceivedArticlItem
     */
    public function getReceivedArticleItems()
    {
      return $this->ReceivedArticleItems;
    }

    /**
     * @param ArrayOfReceivedArticlItem $ReceivedArticleItems
     * @return \Ongoing\ReceivedInOrder
     */
    public function setReceivedArticleItems($ReceivedArticleItems)
    {
      $this->ReceivedArticleItems = $ReceivedArticleItems;
      return $this;
    }

}
