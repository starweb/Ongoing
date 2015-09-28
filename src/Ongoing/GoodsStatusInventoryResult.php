<?php

namespace Ongoing;

class GoodsStatusInventoryResult
{

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var \DateTime $Generated
     */
    protected $Generated = null;

    /**
     * @var ArrayOfGoodsStatusInventoryLine $GoodsStatusInventoryLines
     */
    protected $GoodsStatusInventoryLines = null;

    /**
     * @param int $GoodsOwnerId
     * @param \DateTime $Generated
     */
    public function __construct($GoodsOwnerId, \DateTime $Generated)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->Generated = $Generated->format(\DateTime::ATOM);
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
     * @return \Ongoing\GoodsStatusInventoryResult
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGenerated()
    {
      if ($this->Generated == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Generated);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Generated
     * @return \Ongoing\GoodsStatusInventoryResult
     */
    public function setGenerated(\DateTime $Generated)
    {
      $this->Generated = $Generated->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return ArrayOfGoodsStatusInventoryLine
     */
    public function getGoodsStatusInventoryLines()
    {
      return $this->GoodsStatusInventoryLines;
    }

    /**
     * @param ArrayOfGoodsStatusInventoryLine $GoodsStatusInventoryLines
     * @return \Ongoing\GoodsStatusInventoryResult
     */
    public function setGoodsStatusInventoryLines($GoodsStatusInventoryLines)
    {
      $this->GoodsStatusInventoryLines = $GoodsStatusInventoryLines;
      return $this;
    }

}
