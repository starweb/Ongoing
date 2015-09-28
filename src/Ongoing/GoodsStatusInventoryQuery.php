<?php

namespace Ongoing;

class GoodsStatusInventoryQuery
{

    /**
     * @var ArrayOfString $ArticleNumbersToGet
     */
    protected $ArticleNumbersToGet = null;

    /**
     * @var ArrayOfString $ArticleGroupCodesToGet
     */
    protected $ArticleGroupCodesToGet = null;

    /**
     * @var \DateTime $ArticleUpdatedFrom
     */
    protected $ArticleUpdatedFrom = null;

    /**
     * @var \DateTime $ArticleUpdatedTo
     */
    protected $ArticleUpdatedTo = null;

    /**
     * @var GoodsStatusInventoryType $GoodsStatusInventoryType
     */
    protected $GoodsStatusInventoryType = null;

    /**
     * @param GoodsStatusInventoryType $GoodsStatusInventoryType
     */
    public function __construct($GoodsStatusInventoryType)
    {
      $this->GoodsStatusInventoryType = $GoodsStatusInventoryType;
    }

    /**
     * @return ArrayOfString
     */
    public function getArticleNumbersToGet()
    {
      return $this->ArticleNumbersToGet;
    }

    /**
     * @param ArrayOfString $ArticleNumbersToGet
     * @return \Ongoing\GoodsStatusInventoryQuery
     */
    public function setArticleNumbersToGet($ArticleNumbersToGet)
    {
      $this->ArticleNumbersToGet = $ArticleNumbersToGet;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getArticleGroupCodesToGet()
    {
      return $this->ArticleGroupCodesToGet;
    }

    /**
     * @param ArrayOfString $ArticleGroupCodesToGet
     * @return \Ongoing\GoodsStatusInventoryQuery
     */
    public function setArticleGroupCodesToGet($ArticleGroupCodesToGet)
    {
      $this->ArticleGroupCodesToGet = $ArticleGroupCodesToGet;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArticleUpdatedFrom()
    {
      if ($this->ArticleUpdatedFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArticleUpdatedFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArticleUpdatedFrom
     * @return \Ongoing\GoodsStatusInventoryQuery
     */
    public function setArticleUpdatedFrom(\DateTime $ArticleUpdatedFrom = null)
    {
      if ($ArticleUpdatedFrom == null) {
       $this->ArticleUpdatedFrom = null;
      } else {
        $this->ArticleUpdatedFrom = $ArticleUpdatedFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArticleUpdatedTo()
    {
      if ($this->ArticleUpdatedTo == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArticleUpdatedTo);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArticleUpdatedTo
     * @return \Ongoing\GoodsStatusInventoryQuery
     */
    public function setArticleUpdatedTo(\DateTime $ArticleUpdatedTo = null)
    {
      if ($ArticleUpdatedTo == null) {
       $this->ArticleUpdatedTo = null;
      } else {
        $this->ArticleUpdatedTo = $ArticleUpdatedTo->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return GoodsStatusInventoryType
     */
    public function getGoodsStatusInventoryType()
    {
      return $this->GoodsStatusInventoryType;
    }

    /**
     * @param GoodsStatusInventoryType $GoodsStatusInventoryType
     * @return \Ongoing\GoodsStatusInventoryQuery
     */
    public function setGoodsStatusInventoryType($GoodsStatusInventoryType)
    {
      $this->GoodsStatusInventoryType = $GoodsStatusInventoryType;
      return $this;
    }

}
