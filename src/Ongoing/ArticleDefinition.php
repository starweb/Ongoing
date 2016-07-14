<?php

namespace Ongoing;

class ArticleDefinition
{

    /**
     * @var ArticleOperation $ArticleOperation
     */
    protected $ArticleOperation = null;

    /**
     * @var ArticleIdentificationType $ArticleIdentification
     */
    protected $ArticleIdentification = null;

    /**
     * @var int $ArticleSystemId
     */
    protected $ArticleSystemId = null;

    /**
     * @var string $ArticleNumber
     */
    protected $ArticleNumber = null;

    /**
     * @var string $ArticleName
     */
    protected $ArticleName = null;

    /**
     * @var string $ProductCode
     */
    protected $ProductCode = null;

    /**
     * @var string $BarCode
     */
    protected $BarCode = null;

    /**
     * @var string $SupplierArticleNumber
     */
    protected $SupplierArticleNumber = null;

    /**
     * @var string $ArticleDescription
     */
    protected $ArticleDescription = null;

    /**
     * @var string $ArticleUnitCode
     */
    protected $ArticleUnitCode = null;

    /**
     * @var string $CountryOfOriginCode
     */
    protected $CountryOfOriginCode = null;

    /**
     * @var string $StatisticsNumber
     */
    protected $StatisticsNumber = null;

    /**
     * @var string $PurchaseCurrencyCode
     */
    protected $PurchaseCurrencyCode = null;

    /**
     * @var float $Weight
     */
    protected $Weight = null;

    /**
     * @var float $NetWeight
     */
    protected $NetWeight = null;

    /**
     * @var float $Volume
     */
    protected $Volume = null;

    /**
     * @var float $Length
     */
    protected $Length = null;

    /**
     * @var float $Width
     */
    protected $Width = null;

    /**
     * @var float $Height
     */
    protected $Height = null;

    /**
     * @var int $QuantityPerPallet
     */
    protected $QuantityPerPallet = null;

    /**
     * @var int $QuantityPerPackage
     */
    protected $QuantityPerPackage = null;

    /**
     * @var int $OrderPoint
     */
    protected $OrderPoint = null;

    /**
     * @var float $Price
     */
    protected $Price = null;

    /**
     * @var float $CustomerPrice
     */
    protected $CustomerPrice = null;

    /**
     * @var float $PurchasePrice
     */
    protected $PurchasePrice = null;

    /**
     * @var boolean $IsStockArticle
     */
    protected $IsStockArticle = null;

    /**
     * @var ArticleGroup $ArticleGroup
     */
    protected $ArticleGroup = null;

    /**
     * @var TypeClass $ArticleCategory
     */
    protected $ArticleCategory = null;

    /**
     * @var VatCodeClass $VatCode
     */
    protected $VatCode = null;

    /**
     * @var DangerousGoods[] $DangerousGoods
     */
    protected $DangerousGoods = null;

    /**
     * @var ArticleNames $ArticleNames
     */
    protected $ArticleNames = null;

    /**
     * @var ArticleStructureSpecification $ArticleStructureSpecification
     */
    protected $ArticleStructureSpecification = null;

    /**
     * @var Supplier $MainSupplier
     */
    protected $MainSupplier = null;

    /**
     * @var boolean $IsGSPCertified
     */
    protected $IsGSPCertified = null;

    /**
     * @var int $MaxStockDays
     */
    protected $MaxStockDays = null;

    /**
     * @var string $BarCodePackage
     */
    protected $BarCodePackage = null;

    /**
     * @var string $LinkToPicture
     */
    protected $LinkToPicture = null;

    /**
     * @param ArticleOperation $ArticleOperation
     * @param ArticleIdentificationType $ArticleIdentification
     */
    public function __construct($ArticleOperation, $ArticleIdentification)
    {
      $this->ArticleOperation = $ArticleOperation;
      $this->ArticleIdentification = $ArticleIdentification;
    }

    /**
     * @return ArticleOperation
     */
    public function getArticleOperation()
    {
      return $this->ArticleOperation;
    }

    /**
     * @param ArticleOperation $ArticleOperation
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleOperation($ArticleOperation)
    {
      $this->ArticleOperation = $ArticleOperation;
      return $this;
    }

    /**
     * @return ArticleIdentificationType
     */
    public function getArticleIdentification()
    {
      return $this->ArticleIdentification;
    }

    /**
     * @param ArticleIdentificationType $ArticleIdentification
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleIdentification($ArticleIdentification)
    {
      $this->ArticleIdentification = $ArticleIdentification;
      return $this;
    }

    /**
     * @return int
     */
    public function getArticleSystemId()
    {
      return $this->ArticleSystemId;
    }

    /**
     * @param int $ArticleSystemId
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleSystemId($ArticleSystemId)
    {
      $this->ArticleSystemId = $ArticleSystemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleNumber()
    {
      return $this->ArticleNumber;
    }

    /**
     * @param string $ArticleNumber
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleNumber($ArticleNumber)
    {
      $this->ArticleNumber = $ArticleNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleName()
    {
      return $this->ArticleName;
    }

    /**
     * @param string $ArticleName
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleName($ArticleName)
    {
      $this->ArticleName = $ArticleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductCode()
    {
      return $this->ProductCode;
    }

    /**
     * @param string $ProductCode
     * @return \Ongoing\ArticleDefinition
     */
    public function setProductCode($ProductCode)
    {
      $this->ProductCode = $ProductCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCode()
    {
      return $this->BarCode;
    }

    /**
     * @param string $BarCode
     * @return \Ongoing\ArticleDefinition
     */
    public function setBarCode($BarCode)
    {
      $this->BarCode = $BarCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierArticleNumber()
    {
      return $this->SupplierArticleNumber;
    }

    /**
     * @param string $SupplierArticleNumber
     * @return \Ongoing\ArticleDefinition
     */
    public function setSupplierArticleNumber($SupplierArticleNumber)
    {
      $this->SupplierArticleNumber = $SupplierArticleNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleDescription()
    {
      return $this->ArticleDescription;
    }

    /**
     * @param string $ArticleDescription
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleDescription($ArticleDescription)
    {
      $this->ArticleDescription = $ArticleDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getArticleUnitCode()
    {
      return $this->ArticleUnitCode;
    }

    /**
     * @param string $ArticleUnitCode
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleUnitCode($ArticleUnitCode)
    {
      $this->ArticleUnitCode = $ArticleUnitCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfOriginCode()
    {
      return $this->CountryOfOriginCode;
    }

    /**
     * @param string $CountryOfOriginCode
     * @return \Ongoing\ArticleDefinition
     */
    public function setCountryOfOriginCode($CountryOfOriginCode)
    {
      $this->CountryOfOriginCode = $CountryOfOriginCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatisticsNumber()
    {
      return $this->StatisticsNumber;
    }

    /**
     * @param string $StatisticsNumber
     * @return \Ongoing\ArticleDefinition
     */
    public function setStatisticsNumber($StatisticsNumber)
    {
      $this->StatisticsNumber = $StatisticsNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPurchaseCurrencyCode()
    {
      return $this->PurchaseCurrencyCode;
    }

    /**
     * @param string $PurchaseCurrencyCode
     * @return \Ongoing\ArticleDefinition
     */
    public function setPurchaseCurrencyCode($PurchaseCurrencyCode)
    {
      $this->PurchaseCurrencyCode = $PurchaseCurrencyCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
      return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return \Ongoing\ArticleDefinition
     */
    public function setWeight($Weight)
    {
      $this->Weight = $Weight;
      return $this;
    }

    /**
     * @return float
     */
    public function getNetWeight()
    {
      return $this->NetWeight;
    }

    /**
     * @param float $NetWeight
     * @return \Ongoing\ArticleDefinition
     */
    public function setNetWeight($NetWeight)
    {
      $this->NetWeight = $NetWeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param float $Volume
     * @return \Ongoing\ArticleDefinition
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
      return $this->Length;
    }

    /**
     * @param float $Length
     * @return \Ongoing\ArticleDefinition
     */
    public function setLength($Length)
    {
      $this->Length = $Length;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param float $Width
     * @return \Ongoing\ArticleDefinition
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param float $Height
     * @return \Ongoing\ArticleDefinition
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityPerPallet()
    {
      return $this->QuantityPerPallet;
    }

    /**
     * @param int $QuantityPerPallet
     * @return \Ongoing\ArticleDefinition
     */
    public function setQuantityPerPallet($QuantityPerPallet)
    {
      $this->QuantityPerPallet = $QuantityPerPallet;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantityPerPackage()
    {
      return $this->QuantityPerPackage;
    }

    /**
     * @param int $QuantityPerPackage
     * @return \Ongoing\ArticleDefinition
     */
    public function setQuantityPerPackage($QuantityPerPackage)
    {
      $this->QuantityPerPackage = $QuantityPerPackage;
      return $this;
    }

    /**
     * @return int
     */
    public function getOrderPoint()
    {
      return $this->OrderPoint;
    }

    /**
     * @param int $OrderPoint
     * @return \Ongoing\ArticleDefinition
     */
    public function setOrderPoint($OrderPoint)
    {
      $this->OrderPoint = $OrderPoint;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param float $Price
     * @return \Ongoing\ArticleDefinition
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return float
     */
    public function getCustomerPrice()
    {
      return $this->CustomerPrice;
    }

    /**
     * @param float $CustomerPrice
     * @return \Ongoing\ArticleDefinition
     */
    public function setCustomerPrice($CustomerPrice)
    {
      $this->CustomerPrice = $CustomerPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePrice()
    {
      return $this->PurchasePrice;
    }

    /**
     * @param float $PurchasePrice
     * @return \Ongoing\ArticleDefinition
     */
    public function setPurchasePrice($PurchasePrice)
    {
      $this->PurchasePrice = $PurchasePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsStockArticle()
    {
      return $this->IsStockArticle;
    }

    /**
     * @param boolean $IsStockArticle
     * @return \Ongoing\ArticleDefinition
     */
    public function setIsStockArticle($IsStockArticle)
    {
      $this->IsStockArticle = $IsStockArticle;
      return $this;
    }

    /**
     * @return ArticleGroup
     */
    public function getArticleGroup()
    {
      return $this->ArticleGroup;
    }

    /**
     * @param ArticleGroup $ArticleGroup
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleGroup($ArticleGroup)
    {
      $this->ArticleGroup = $ArticleGroup;
      return $this;
    }

    /**
     * @return TypeClass
     */
    public function getArticleCategory()
    {
      return $this->ArticleCategory;
    }

    /**
     * @param TypeClass $ArticleCategory
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleCategory($ArticleCategory)
    {
      $this->ArticleCategory = $ArticleCategory;
      return $this;
    }

    /**
     * @return VatCodeClass
     */
    public function getVatCode()
    {
      return $this->VatCode;
    }

    /**
     * @param VatCodeClass $VatCode
     * @return \Ongoing\ArticleDefinition
     */
    public function setVatCode($VatCode)
    {
      $this->VatCode = $VatCode;
      return $this;
    }

    /**
     * @return DangerousGoods[]
     */
    public function getDangerousGoods()
    {
      return $this->DangerousGoods;
    }

    /**
     * @param DangerousGoods[] $DangerousGoods
     * @return \Ongoing\ArticleDefinition
     */
    public function setDangerousGoods(array $DangerousGoods = null)
    {
      $this->DangerousGoods = $DangerousGoods;
      return $this;
    }

    /**
     * @return ArticleNames
     */
    public function getArticleNames()
    {
      return $this->ArticleNames;
    }

    /**
     * @param ArticleNames $ArticleNames
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleNames($ArticleNames)
    {
      $this->ArticleNames = $ArticleNames;
      return $this;
    }

    /**
     * @return ArticleStructureSpecification
     */
    public function getArticleStructureSpecification()
    {
      return $this->ArticleStructureSpecification;
    }

    /**
     * @param ArticleStructureSpecification $ArticleStructureSpecification
     * @return \Ongoing\ArticleDefinition
     */
    public function setArticleStructureSpecification($ArticleStructureSpecification)
    {
      $this->ArticleStructureSpecification = $ArticleStructureSpecification;
      return $this;
    }

    /**
     * @return Supplier
     */
    public function getMainSupplier()
    {
      return $this->MainSupplier;
    }

    /**
     * @param Supplier $MainSupplier
     * @return \Ongoing\ArticleDefinition
     */
    public function setMainSupplier($MainSupplier)
    {
      $this->MainSupplier = $MainSupplier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGSPCertified()
    {
      return $this->IsGSPCertified;
    }

    /**
     * @param boolean $IsGSPCertified
     * @return \Ongoing\ArticleDefinition
     */
    public function setIsGSPCertified($IsGSPCertified)
    {
      $this->IsGSPCertified = $IsGSPCertified;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxStockDays()
    {
      return $this->MaxStockDays;
    }

    /**
     * @param int $MaxStockDays
     * @return \Ongoing\ArticleDefinition
     */
    public function setMaxStockDays($MaxStockDays)
    {
      $this->MaxStockDays = $MaxStockDays;
      return $this;
    }

    /**
     * @return string
     */
    public function getBarCodePackage()
    {
      return $this->BarCodePackage;
    }

    /**
     * @param string $BarCodePackage
     * @return \Ongoing\ArticleDefinition
     */
    public function setBarCodePackage($BarCodePackage)
    {
      $this->BarCodePackage = $BarCodePackage;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkToPicture()
    {
      return $this->LinkToPicture;
    }

    /**
     * @param string $LinkToPicture
     * @return \Ongoing\ArticleDefinition
     */
    public function setLinkToPicture($LinkToPicture)
    {
      $this->LinkToPicture = $LinkToPicture;
      return $this;
    }

}
