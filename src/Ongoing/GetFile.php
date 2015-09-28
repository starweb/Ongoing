<?php

namespace Ongoing;

class GetFile
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
     * @var int $FileId
     */
    protected $FileId = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param int $FileId
     */
    public function __construct($UserName, $Password, $FileId)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->FileId = $FileId;
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
     * @return \Ongoing\GetFile
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
     * @return \Ongoing\GetFile
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return int
     */
    public function getFileId()
    {
      return $this->FileId;
    }

    /**
     * @param int $FileId
     * @return \Ongoing\GetFile
     */
    public function setFileId($FileId)
    {
      $this->FileId = $FileId;
      return $this;
    }

}
