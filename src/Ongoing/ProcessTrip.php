<?php

namespace Ongoing;

class ProcessTrip
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
     * @var Trip $Trip
     */
    protected $Trip = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param Trip $Trip
     */
    public function __construct($UserName, $Password, $Trip)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->Trip = $Trip;
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
     * @return \Ongoing\ProcessTrip
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
     * @return \Ongoing\ProcessTrip
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return Trip
     */
    public function getTrip()
    {
      return $this->Trip;
    }

    /**
     * @param Trip $Trip
     * @return \Ongoing\ProcessTrip
     */
    public function setTrip($Trip)
    {
      $this->Trip = $Trip;
      return $this;
    }

}
