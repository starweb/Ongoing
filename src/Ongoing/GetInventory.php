<?php

namespace Ongoing;

class GetInventory
{

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @param int $GoodsOwnerId
     * @param string $UserName
     * @param string $Password
     */
    public function __construct($GoodsOwnerId, $UserName, $Password)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->UserName = $UserName;
      $this->Password = $Password;
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
     * @return \Ongoing\GetInventory
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \Ongoing\GetInventory
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \Ongoing\GetInventory
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
