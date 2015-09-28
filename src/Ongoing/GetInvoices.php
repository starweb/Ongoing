<?php

namespace Ongoing;

class GetInvoices
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
     * @var GetInvoicesQuery $query
     */
    protected $query = null;

    /**
     * @param string $UserName
     * @param string $Password
     * @param GetInvoicesQuery $query
     */
    public function __construct($UserName, $Password, $query)
    {
      $this->UserName = $UserName;
      $this->Password = $Password;
      $this->query = $query;
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
     * @return \Ongoing\GetInvoices
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
     * @return \Ongoing\GetInvoices
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return GetInvoicesQuery
     */
    public function getQuery()
    {
      return $this->query;
    }

    /**
     * @param GetInvoicesQuery $query
     * @return \Ongoing\GetInvoices
     */
    public function setQuery($query)
    {
      $this->query = $query;
      return $this;
    }

}
