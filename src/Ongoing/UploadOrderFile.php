<?php

namespace Ongoing;

class UploadOrderFile
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
     * @var OrderFile $OrderFile
     */
    protected $OrderFile = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param OrderFile $OrderFile
     */
    public function __construct($UserName, $Password, $OrderFile)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->OrderFile = $OrderFile;
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
     * @return \Ongoing\UploadOrderFile
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
     * @return \Ongoing\UploadOrderFile
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return OrderFile
     */
    public function getOrderFile()
    {
      return $this->OrderFile;
    }

    /**
     * @param OrderFile $OrderFile
     * @return \Ongoing\UploadOrderFile
     */
    public function setOrderFile($OrderFile)
    {
      $this->OrderFile = $OrderFile;
      return $this;
    }

}
