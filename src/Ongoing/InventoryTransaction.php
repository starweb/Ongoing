<?php

namespace Ongoing;

class InventoryTransaction
{

    /**
     * @var float $InventoryChangesNumberOfItems
     */
    protected $InventoryChangesNumberOfItems = null;

    /**
     * @var \DateTime $InventoryTime
     */
    protected $InventoryTime = null;

    /**
     * @var int $InventoryId
     */
    protected $InventoryId = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @var string $InventoryItemComment
     */
    protected $InventoryItemComment = null;

    /**
     * @param float $InventoryChangesNumberOfItems
     * @param \DateTime $InventoryTime
     * @param int $InventoryId
     */
    public function __construct($InventoryChangesNumberOfItems, \DateTime $InventoryTime, $InventoryId)
    {
      $this->InventoryChangesNumberOfItems = $InventoryChangesNumberOfItems;
      $this->InventoryTime = $InventoryTime->format(\DateTime::ATOM);
      $this->InventoryId = $InventoryId;
    }

    /**
     * @return float
     */
    public function getInventoryChangesNumberOfItems()
    {
      return $this->InventoryChangesNumberOfItems;
    }

    /**
     * @param float $InventoryChangesNumberOfItems
     * @return \Ongoing\InventoryTransaction
     */
    public function setInventoryChangesNumberOfItems($InventoryChangesNumberOfItems)
    {
      $this->InventoryChangesNumberOfItems = $InventoryChangesNumberOfItems;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getInventoryTime()
    {
      if ($this->InventoryTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->InventoryTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $InventoryTime
     * @return \Ongoing\InventoryTransaction
     */
    public function setInventoryTime(\DateTime $InventoryTime)
    {
      $this->InventoryTime = $InventoryTime->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getInventoryId()
    {
      return $this->InventoryId;
    }

    /**
     * @param int $InventoryId
     * @return \Ongoing\InventoryTransaction
     */
    public function setInventoryId($InventoryId)
    {
      $this->InventoryId = $InventoryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \Ongoing\InventoryTransaction
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getInventoryItemComment()
    {
      return $this->InventoryItemComment;
    }

    /**
     * @param string $InventoryItemComment
     * @return \Ongoing\InventoryTransaction
     */
    public function setInventoryItemComment($InventoryItemComment)
    {
      $this->InventoryItemComment = $InventoryItemComment;
      return $this;
    }

}
