<?php

namespace Ongoing;

class ProcessInvoice
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
     * @var GoodsOwnerInvoice $GoodsOwnerInvoice
     */
    protected $GoodsOwnerInvoice = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param GoodsOwnerInvoice $GoodsOwnerInvoice
     */
    public function __construct($UserName, $Password, $GoodsOwnerInvoice)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->GoodsOwnerInvoice = $GoodsOwnerInvoice;
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
     * @return \Ongoing\ProcessInvoice
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
     * @return \Ongoing\ProcessInvoice
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return GoodsOwnerInvoice
     */
    public function getGoodsOwnerInvoice()
    {
      return $this->GoodsOwnerInvoice;
    }

    /**
     * @param GoodsOwnerInvoice $GoodsOwnerInvoice
     * @return \Ongoing\ProcessInvoice
     */
    public function setGoodsOwnerInvoice($GoodsOwnerInvoice)
    {
      $this->GoodsOwnerInvoice = $GoodsOwnerInvoice;
      return $this;
    }

}
