<?php

namespace Ongoing;

class Language
{

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
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \Ongoing\Language
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
