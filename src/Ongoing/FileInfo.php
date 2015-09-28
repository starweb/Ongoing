<?php

namespace Ongoing;

class FileInfo
{

    /**
     * @var int $FileId
     */
    protected $FileId = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $MimeType
     */
    protected $MimeType = null;

    /**
     * @var int $GoodsOwnerId
     */
    protected $GoodsOwnerId = null;

    /**
     * @var string $GoodsOwnerCode
     */
    protected $GoodsOwnerCode = null;

    /**
     * @var string $ArticleNo
     */
    protected $ArticleNo = null;

    /**
     * @var string $ArticleName
     */
    protected $ArticleName = null;

    /**
     * @var string $OrderNumber
     */
    protected $OrderNumber = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var int $ArticleSystemId
     */
    protected $ArticleSystemId = null;

    /**
     * @param int $FileId
     */
    public function __construct($FileId)
    {
      $this->FileId = $FileId;
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
     * @return \Ongoing\FileInfo
     */
    public function setFileId($FileId)
    {
      $this->FileId = $FileId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \Ongoing\FileInfo
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
      return $this->MimeType;
    }

    /**
     * @param string $MimeType
     * @return \Ongoing\FileInfo
     */
    public function setMimeType($MimeType)
    {
      $this->MimeType = $MimeType;
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
     * @return \Ongoing\FileInfo
     */
    public function setGoodsOwnerId($GoodsOwnerId)
    {
      $this->GoodsOwnerId = $GoodsOwnerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerCode()
    {
      return $this->GoodsOwnerCode;
    }

    /**
     * @param string $GoodsOwnerCode
     * @return \Ongoing\FileInfo
     */
    public function setGoodsOwnerCode($GoodsOwnerCode)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
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
     * @return \Ongoing\FileInfo
     */
    public function setArticleNo($ArticleNo)
    {
      $this->ArticleNo = $ArticleNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleName()
    {
      return $this->ArticleName;
    }

    /**
     * @param string $ArticleName
     * @return \Ongoing\FileInfo
     */
    public function setArticleName($ArticleName)
    {
      $this->ArticleName = $ArticleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
      return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     * @return \Ongoing\FileInfo
     */
    public function setOrderNumber($OrderNumber)
    {
      $this->OrderNumber = $OrderNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return \Ongoing\FileInfo
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getArticleSystemId()
    {
      return $this->ArticleSystemId;
    }

    /**
     * @param int $ArticleSystemId
     * @return \Ongoing\FileInfo
     */
    public function setArticleSystemId($ArticleSystemId)
    {
      $this->ArticleSystemId = $ArticleSystemId;
      return $this;
    }

}
