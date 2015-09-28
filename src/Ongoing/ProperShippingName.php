<?php

namespace Ongoing;

class ProperShippingName
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \Ongoing\ProperShippingName
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \Ongoing\ProperShippingName
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
