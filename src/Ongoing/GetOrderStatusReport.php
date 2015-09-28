<?php

namespace Ongoing;

class GetOrderStatusReport
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
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @param int $GoodsOwnerId
     * @param string $UserName
     * @param string $Password
     * @param string $GoodsOwnerOrderNumber
     */
    public function __construct($GoodsOwnerId, $UserName, $Password, $GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
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
     * @return \Ongoing\GetOrderStatusReport
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
     * @return \Ongoing\GetOrderStatusReport
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
     * @return \Ongoing\GetOrderStatusReport
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderNumber()
    {
      return $this->GoodsOwnerOrderNumber;
    }

    /**
     * @param string $GoodsOwnerOrderNumber
     * @return \Ongoing\GetOrderStatusReport
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
      return $this;
    }

}
