<?php

namespace Ongoing;

class FileResultClass
{

    /**
     * @var string $ErrorMessage
     */
    protected $ErrorMessage = null;

    /**
     * @var string $GoodsOwnerOrderNumber
     */
    protected $GoodsOwnerOrderNumber = null;

    /**
     * @var int $OrderId
     */
    protected $OrderId = null;

    /**
     * @var int $InOrderId
     */
    protected $InOrderId = null;

    /**
     * @var int $ArticleDefId
     */
    protected $ArticleDefId = null;

    /**
     * @var boolean $Success
     */
    protected $Success = null;

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @param int $OrderId
     * @param int $InOrderId
     * @param boolean $Success
     */
    public function __construct($OrderId, $InOrderId, $Success)
    {
      $this->OrderId = $OrderId;
      $this->InOrderId = $InOrderId;
      $this->Success = $Success;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
      return $this->ErrorMessage;
    }

    /**
     * @param string $ErrorMessage
     * @return \Ongoing\FileResultClass
     */
    public function setErrorMessage($ErrorMessage)
    {
      $this->ErrorMessage = $ErrorMessage;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsOwnerOrderNumber()
    {
      return $this->GoodsOwnerOrderNumber;
    }

    /**
     * @param string $GoodsOwnerOrderNumber
     * @return \Ongoing\FileResultClass
     */
    public function setGoodsOwnerOrderNumber($GoodsOwnerOrderNumber)
    {
      $this->GoodsOwnerOrderNumber = $GoodsOwnerOrderNumber;
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
     * @return \Ongoing\FileResultClass
     */
    public function setOrderId($OrderId)
    {
      $this->OrderId = $OrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrderId()
    {
      return $this->InOrderId;
    }

    /**
     * @param int $InOrderId
     * @return \Ongoing\FileResultClass
     */
    public function setInOrderId($InOrderId)
    {
      $this->InOrderId = $InOrderId;
      return $this;
    }

    /**
     * @return int
     */
    public function getArticleDefId()
    {
      return $this->ArticleDefId;
    }

    /**
     * @param int $ArticleDefId
     * @return \Ongoing\FileResultClass
     */
    public function setArticleDefId($ArticleDefId)
    {
      $this->ArticleDefId = $ArticleDefId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param boolean $Success
     * @return \Ongoing\FileResultClass
     */
    public function setSuccess($Success)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->Message;
    }

    /**
     * @param string $Message
     * @return \Ongoing\FileResultClass
     */
    public function setMessage($Message)
    {
      $this->Message = $Message;
      return $this;
    }

}
