<?php

namespace Ongoing;

class ProductionOrderLineInfo
{

    /**
     * @var string $ArticleName
     */
    protected $ArticleName = null;

    /**
     * @var string $ArticleNumber
     */
    protected $ArticleNumber = null;

    /**
     * @var string $OrderLineComment
     */
    protected $OrderLineComment = null;

    /**
     * @var int $ProductionOrderLineId
     */
    protected $ProductionOrderLineId = null;

    /**
     * @var float $OrderedNumberOfItems
     */
    protected $OrderedNumberOfItems = null;

    /**
     * @var float $ProducedNumberOfItems
     */
    protected $ProducedNumberOfItems = null;

    /**
     * @param int $ProductionOrderLineId
     * @param float $OrderedNumberOfItems
     * @param float $ProducedNumberOfItems
     */
    public function __construct($ProductionOrderLineId, $OrderedNumberOfItems, $ProducedNumberOfItems)
    {
      $this->ProductionOrderLineId = $ProductionOrderLineId;
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
      $this->ProducedNumberOfItems = $ProducedNumberOfItems;
    }

    /**
     * @return string
     */
    public function getArticleName()
    {
      return $this->ArticleName;
    }

    /**
     * @param string $ArticleName
     * @return \Ongoing\ProductionOrderLineInfo
     */
    public function setArticleName($ArticleName)
    {
      $this->ArticleName = $ArticleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber()
    {
      return $this->ArticleNumber;
    }

    /**
     * @param string $ArticleNumber
     * @return \Ongoing\ProductionOrderLineInfo
     */
    public function setArticleNumber($ArticleNumber)
    {
      $this->ArticleNumber = $ArticleNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderLineComment()
    {
      return $this->OrderLineComment;
    }

    /**
     * @param string $OrderLineComment
     * @return \Ongoing\ProductionOrderLineInfo
     */
    public function setOrderLineComment($OrderLineComment)
    {
      $this->OrderLineComment = $OrderLineComment;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductionOrderLineId()
    {
      return $this->ProductionOrderLineId;
    }

    /**
     * @param int $ProductionOrderLineId
     * @return \Ongoing\ProductionOrderLineInfo
     */
    public function setProductionOrderLineId($ProductionOrderLineId)
    {
      $this->ProductionOrderLineId = $ProductionOrderLineId;
      return $this;
    }

    /**
     * @return float
     */
    public function getOrderedNumberOfItems()
    {
      return $this->OrderedNumberOfItems;
    }

    /**
     * @param float $OrderedNumberOfItems
     * @return \Ongoing\ProductionOrderLineInfo
     */
    public function setOrderedNumberOfItems($OrderedNumberOfItems)
    {
      $this->OrderedNumberOfItems = $OrderedNumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getProducedNumberOfItems()
    {
      return $this->ProducedNumberOfItems;
    }

    /**
     * @param float $ProducedNumberOfItems
     * @return \Ongoing\ProductionOrderLineInfo
     */
    public function setProducedNumberOfItems($ProducedNumberOfItems)
    {
      $this->ProducedNumberOfItems = $ProducedNumberOfItems;
      return $this;
    }

}
