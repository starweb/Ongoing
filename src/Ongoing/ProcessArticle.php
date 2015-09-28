<?php

namespace Ongoing;

class ProcessArticle
{

    /**
     * @var string $GoodsOwnerCode
     */
    protected $GoodsOwnerCode = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var ArticleDefinition $art
     */
    protected $art = null;

    /**
     * @param string $GoodsOwnerCode
     * @param string $UserName
     * @param string $Password
     * @param ArticleDefinition $art
     */
    public function __construct($GoodsOwnerCode, $UserName, $Password, $art)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->art = $art;
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
     * @return \Ongoing\ProcessArticle
     */
    public function setGoodsOwnerCode($GoodsOwnerCode)
    {
      $this->GoodsOwnerCode = $GoodsOwnerCode;
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
     * @return \Ongoing\ProcessArticle
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
     * @return \Ongoing\ProcessArticle
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ArticleDefinition
     */
    public function getArt()
    {
      return $this->art;
    }

    /**
     * @param ArticleDefinition $art
     * @return \Ongoing\ProcessArticle
     */
    public function setArt($art)
    {
      $this->art = $art;
      return $this;
    }

}
