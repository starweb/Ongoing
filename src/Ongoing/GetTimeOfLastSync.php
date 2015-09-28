<?php

namespace Ongoing;

class GetTimeOfLastSync
{

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var string $IntegrationType
     */
    protected $IntegrationType = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param int $GoodsOwnerId
     * @param string $IntegrationType
     */
    public function __construct($UserName, $Password, $GoodsOwnerId, $IntegrationType)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->IntegrationType = $IntegrationType;
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
     * @return \Ongoing\GetTimeOfLastSync
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
     * @return \Ongoing\GetTimeOfLastSync
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
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
     * @return \Ongoing\GetTimeOfLastSync
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntegrationType()
    {
      return $this->IntegrationType;
    }

    /**
     * @param string $IntegrationType
     * @return \Ongoing\GetTimeOfLastSync
     */
    public function setIntegrationType($IntegrationType)
    {
      $this->IntegrationType = $IntegrationType;
      return $this;
    }

}
