<?php

namespace Ongoing;

class InventoryLine
{

    /**
     * @var ArticleClass $Article
     */
    protected $Article = null;

    /**
     * @var int $NumberOfBookedItems
     */
    protected $NumberOfBookedItems = null;

    /**
     * @var int $NumberOfItems
     */
    protected $NumberOfItems = null;

    /**
     * @var float $NumberOfLockedItems
     */
    protected $NumberOfLockedItems = null;

    /**
     * @var \DateTime $LastInDate
     */
    protected $LastInDate = null;

    /**
     * @param int $NumberOfBookedItems
     * @param int $NumberOfItems
     * @param float $NumberOfLockedItems
     */
    public function __construct($NumberOfBookedItems, $NumberOfItems, $NumberOfLockedItems)
    {
      $this->NumberOfBookedItems = $NumberOfBookedItems;
      $this->NumberOfItems = $NumberOfItems;
      $this->NumberOfLockedItems = $NumberOfLockedItems;
    }

    /**
     * @return ArticleClass
     */
    public function getArticle()
    {
      return $this->Article;
    }

    /**
     * @param ArticleClass $Article
     * @return \Ongoing\InventoryLine
     */
    public function setArticle($Article)
    {
      $this->Article = $Article;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfBookedItems()
    {
      return $this->NumberOfBookedItems;
    }

    /**
     * @param int $NumberOfBookedItems
     * @return \Ongoing\InventoryLine
     */
    public function setNumberOfBookedItems($NumberOfBookedItems)
    {
      $this->NumberOfBookedItems = $NumberOfBookedItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
      return $this->NumberOfItems;
    }

    /**
     * @param int $NumberOfItems
     * @return \Ongoing\InventoryLine
     */
    public function setNumberOfItems($NumberOfItems)
    {
      $this->NumberOfItems = $NumberOfItems;
      return $this;
    }

    /**
     * @return float
     */
    public function getNumberOfLockedItems()
    {
      return $this->NumberOfLockedItems;
    }

    /**
     * @param float $NumberOfLockedItems
     * @return \Ongoing\InventoryLine
     */
    public function setNumberOfLockedItems($NumberOfLockedItems)
    {
      $this->NumberOfLockedItems = $NumberOfLockedItems;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastInDate()
    {
      if ($this->LastInDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastInDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastInDate
     * @return \Ongoing\InventoryLine
     */
    public function setLastInDate(\DateTime $LastInDate = null)
    {
      if ($LastInDate == null) {
       $this->LastInDate = null;
      } else {
        $this->LastInDate = $LastInDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
