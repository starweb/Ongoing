<?php

namespace Ongoing;

class UploadArticleDefFile
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
     * @var string $ArticleNo
     */
    protected $ArticleNo = null;

    /**
     * @var string $BatchNo
     */
    protected $BatchNo = null;

    /**
     * @var File $File
     */
    protected $File = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param int $GoodsOwnerId
     * @param string $ArticleNo
     * @param string $BatchNo
     * @param File $File
     */
    public function __construct($UserName, $Password, $GoodsOwnerId, $ArticleNo, $BatchNo, $File)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->GoodsOwnerId = $GoodsOwnerId;
      $this->ArticleNo = $ArticleNo;
      $this->BatchNo = $BatchNo;
      $this->File = $File;
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
     * @return \Ongoing\UploadArticleDefFile
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
     * @return \Ongoing\UploadArticleDefFile
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
     * @return \Ongoing\UploadArticleDefFile
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleNo()
    {
      return $this->ArticleNo;
    }

    /**
     * @param string $ArticleNo
     * @return \Ongoing\UploadArticleDefFile
     */
    public function setArticleNo($ArticleNo)
    {
      $this->ArticleNo = $ArticleNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getBatchNo()
    {
      return $this->BatchNo;
    }

    /**
     * @param string $BatchNo
     * @return \Ongoing\UploadArticleDefFile
     */
    public function setBatchNo($BatchNo)
    {
      $this->BatchNo = $BatchNo;
      return $this;
    }

    /**
     * @return File
     */
    public function getFile()
    {
      return $this->File;
    }

    /**
     * @param File $File
     * @return \Ongoing\UploadArticleDefFile
     */
    public function setFile($File)
    {
      $this->File = $File;
      return $this;
    }

}
