<?php

namespace Ongoing;

class InvoiceArticle
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $Account
     */
    protected $Account = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \Ongoing\InvoiceArticle
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \Ongoing\InvoiceArticle
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param string $Account
     * @return \Ongoing\InvoiceArticle
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

}
