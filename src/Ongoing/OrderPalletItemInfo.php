<?php

namespace Ongoing;

class OrderPalletItemInfo
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $TypeId
     */
    protected $TypeId = null;

    /**
     * @var string $LabelId
     */
    protected $LabelId = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

    /**
     * @param int $Id
     */
    public function __construct($Id)
    {
      $this->Id = $Id;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
      return $this->TypeId;
    }

    /**
     * @param int $TypeId
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setTypeId($TypeId)
    {
      $this->TypeId = $TypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelId()
    {
      return $this->LabelId;
    }

    /**
     * @param string $LabelId
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setLabelId($LabelId)
    {
      $this->LabelId = $LabelId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
      return $this->Serial;
    }

    /**
     * @param string $Serial
     * @return \Ongoing\OrderPalletItemInfo
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
      return $this;
    }

}
