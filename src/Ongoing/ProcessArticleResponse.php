<?php

namespace Ongoing;

class ProcessArticleResponse
{

    /**
     * @var FileResultClass $ProcessArticleResult
     */
    protected $ProcessArticleResult = null;

    /**
     * @param FileResultClass $ProcessArticleResult
     */
    public function __construct($ProcessArticleResult)
    {
      $this->ProcessArticleResult = $ProcessArticleResult;
    }

    /**
     * @return FileResultClass
     */
    public function getProcessArticleResult()
    {
      return $this->ProcessArticleResult;
    }

    /**
     * @param FileResultClass $ProcessArticleResult
     * @return \Ongoing\ProcessArticleResponse
     */
    public function setProcessArticleResult($ProcessArticleResult)
    {
      $this->ProcessArticleResult = $ProcessArticleResult;
      return $this;
    }

}
