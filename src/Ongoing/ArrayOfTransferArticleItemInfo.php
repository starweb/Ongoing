<?php

namespace Ongoing;

class ArrayOfTransferArticleItemInfo
{

    /**
     * @var TransferArticleItemInfo[] $TransferArticleItemInfo
     */
    protected $TransferArticleItemInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TransferArticleItemInfo[]
     */
    public function getTransferArticleItemInfo()
    {
      return $this->TransferArticleItemInfo;
    }

    /**
     * @param TransferArticleItemInfo[] $TransferArticleItemInfo
     * @return \Ongoing\ArrayOfTransferArticleItemInfo
     */
    public function setTransferArticleItemInfo(array $TransferArticleItemInfo = null)
    {
      $this->TransferArticleItemInfo = $TransferArticleItemInfo;
      return $this;
    }

}
