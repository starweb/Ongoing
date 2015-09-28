<?php

namespace Ongoing;

class SetTimeOfLastSync
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
     * @var \DateTime $syncTime
     */
    protected $syncTime = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param int $GoodsOwnerId
     * @param string $IntegrationType
     * @param \DateTime $syncTime
     */
    public function __construct($UserName, $Password, $GoodsOwnerId, $IntegrationType, \DateTime $syncTime)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->IntegrationType = $IntegrationType;
      $this->syncTime = $syncTime->format(\DateTime::ATOM);
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
     * @return \Ongoing\SetTimeOfLastSync
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
     * @return \Ongoing\SetTimeOfLastSync
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
     * @return \Ongoing\SetTimeOfLastSync
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
     * @return \Ongoing\SetTimeOfLastSync
     */
    public function setIntegrationType($IntegrationType)
    {
      $this->IntegrationType = $IntegrationType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSyncTime()
    {
      if ($this->syncTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->syncTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $syncTime
     * @return \Ongoing\SetTimeOfLastSync
     */
    public function setSyncTime(\DateTime $syncTime)
    {
      $this->syncTime = $syncTime->format(\DateTime::ATOM);
      return $this;
    }

}
