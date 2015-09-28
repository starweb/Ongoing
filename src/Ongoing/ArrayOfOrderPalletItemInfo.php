<?php

namespace Ongoing;

class ArrayOfOrderPalletItemInfo
{

    /**
     * @var OrderPalletItemInfo[] $OrderPalletItemInfo
     */
    protected $OrderPalletItemInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OrderPalletItemInfo[]
     */
    public function getOrderPalletItemInfo()
    {
      return $this->OrderPalletItemInfo;
    }

    /**
     * @param OrderPalletItemInfo[] $OrderPalletItemInfo
     * @return \Ongoing\ArrayOfOrderPalletItemInfo
     */
    public function setOrderPalletItemInfo(array $OrderPalletItemInfo = null)
    {
      $this->OrderPalletItemInfo = $OrderPalletItemInfo;
      return $this;
    }

}
