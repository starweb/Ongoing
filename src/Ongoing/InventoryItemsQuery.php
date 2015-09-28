<?php

namespace Ongoing;

class InventoryItemsQuery
{

    /**
     * @var boolean $GetZeroStockArticles
     */
    protected $GetZeroStockArticles = null;

    /**
     * @var ArrayOfString $FilterBySerial
     */
    protected $FilterBySerial = null;

    /**
     * @param boolean $GetZeroStockArticles
     */
    public function __construct($GetZeroStockArticles)
    {
      $this->GetZeroStockArticles = $GetZeroStockArticles;
    }

    /**
     * @return boolean
     */
    public function getGetZeroStockArticles()
    {
      return $this->GetZeroStockArticles;
    }

    /**
     * @param boolean $GetZeroStockArticles
     * @return \Ongoing\InventoryItemsQuery
     */
    public function setGetZeroStockArticles($GetZeroStockArticles)
    {
      $this->GetZeroStockArticles = $GetZeroStockArticles;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getFilterBySerial()
    {
      return $this->FilterBySerial;
    }

    /**
     * @param ArrayOfString $FilterBySerial
     * @return \Ongoing\InventoryItemsQuery
     */
    public function setFilterBySerial($FilterBySerial)
    {
      $this->FilterBySerial = $FilterBySerial;
      return $this;
    }

}
