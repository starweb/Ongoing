<?php

namespace Ongoing;

class GetFileList
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
     * @var FileSearchValues $FileSearchValues
     */
    protected $FileSearchValues = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param FileSearchValues $FileSearchValues
     */
    public function __construct($UserName, $Password, $FileSearchValues)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->FileSearchValues = $FileSearchValues;
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
     * @return \Ongoing\GetFileList
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
     * @return \Ongoing\GetFileList
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return FileSearchValues
     */
    public function getFileSearchValues()
    {
      return $this->FileSearchValues;
    }

    /**
     * @param FileSearchValues $FileSearchValues
     * @return \Ongoing\GetFileList
     */
    public function setFileSearchValues($FileSearchValues)
    {
      $this->FileSearchValues = $FileSearchValues;
      return $this;
    }

}
