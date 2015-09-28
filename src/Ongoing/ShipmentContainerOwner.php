<?php

namespace Ongoing;

class ShipmentContainerOwner
{

    /**
     * @var ShipmentContainerOwnerOperation $ShipmentContainerOwnerOperation
     */
    protected $ShipmentContainerOwnerOperation = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Comment
     */
    protected $Comment = null;

    /**
     * @param ShipmentContainerOwnerOperation $ShipmentContainerOwnerOperation
     */
    public function __construct($ShipmentContainerOwnerOperation)
    {
      $this->ShipmentContainerOwnerOperation = $ShipmentContainerOwnerOperation;
    }

    /**
     * @return ShipmentContainerOwnerOperation
     */
    public function getShipmentContainerOwnerOperation()
    {
      return $this->ShipmentContainerOwnerOperation;
    }

    /**
     * @param ShipmentContainerOwnerOperation $ShipmentContainerOwnerOperation
     * @return \Ongoing\ShipmentContainerOwner
     */
    public function setShipmentContainerOwnerOperation($ShipmentContainerOwnerOperation)
    {
      $this->ShipmentContainerOwnerOperation = $ShipmentContainerOwnerOperation;
      return $this;
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
     * @return \Ongoing\ShipmentContainerOwner
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
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
     * @return \Ongoing\ShipmentContainerOwner
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return \Ongoing\ShipmentContainerOwner
     */
    public function setComment($Comment)
    {
      $this->Comment = $Comment;
      return $this;
    }

}
