<?php

namespace Ongoing;

class Service extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'GetInventoryByQuery' => 'Ongoing\\GetInventoryByQuery',
      'GetInventoryQuery' => 'Ongoing\\GetInventoryQuery',
      'ArrayOfString' => 'Ongoing\\ArrayOfString',
      'GetInventoryByQueryResponse' => 'Ongoing\\GetInventoryByQueryResponse',
      'InventoryResult' => 'Ongoing\\InventoryResult',
      'ArrayOfInventoryLine' => 'Ongoing\\ArrayOfInventoryLine',
      'InventoryLine' => 'Ongoing\\InventoryLine',
      'ArticleClass' => 'Ongoing\\ArticleClass',
      'DangerousGoods' => 'Ongoing\\DangerousGoods',
      'ArrayOfUNTunnelCode' => 'Ongoing\\ArrayOfUNTunnelCode',
      'ProperShippingName' => 'Ongoing\\ProperShippingName',
      'InventoryLineDetailed' => 'Ongoing\\InventoryLineDetailed',
      'ArticleBatches' => 'Ongoing\\ArticleBatches',
      'ArticleBatch' => 'Ongoing\\ArticleBatch',
      'ArticleNames' => 'Ongoing\\ArticleNames',
      'ArticleNameClass' => 'Ongoing\\ArticleNameClass',
      'Language' => 'Ongoing\\Language',
      'GetInventory' => 'Ongoing\\GetInventory',
      'GetInventoryResponse' => 'Ongoing\\GetInventoryResponse',
      'GetInventoryPerWarehouse' => 'Ongoing\\GetInventoryPerWarehouse',
      'GetInventoryPerWarehouseQuery' => 'Ongoing\\GetInventoryPerWarehouseQuery',
      'GetInventoryPerWarehouseResponse' => 'Ongoing\\GetInventoryPerWarehouseResponse',
      'GetInventoryPerWarehouseResult' => 'Ongoing\\GetInventoryPerWarehouseResult',
      'ArrayOfPerWarehouseArticleLine' => 'Ongoing\\ArrayOfPerWarehouseArticleLine',
      'PerWarehouseArticleLine' => 'Ongoing\\PerWarehouseArticleLine',
      'ArrayOfPerWarehouseStockLine' => 'Ongoing\\ArrayOfPerWarehouseStockLine',
      'PerWarehouseStockLine' => 'Ongoing\\PerWarehouseStockLine',
      'ArrayOfGetInventoryPerWarehouseError' => 'Ongoing\\ArrayOfGetInventoryPerWarehouseError',
      'GetInventoryPerWarehouseError' => 'Ongoing\\GetInventoryPerWarehouseError',
      'GetInventoryItems' => 'Ongoing\\GetInventoryItems',
      'InventoryItemsQuery' => 'Ongoing\\InventoryItemsQuery',
      'GetInventoryItemsResponse' => 'Ongoing\\GetInventoryItemsResponse',
      'InventoryItemsResult' => 'Ongoing\\InventoryItemsResult',
      'ArrayOfInventoryItemLine' => 'Ongoing\\ArrayOfInventoryItemLine',
      'InventoryItemLine' => 'Ongoing\\InventoryItemLine',
      'ArrayOfInventoryItem' => 'Ongoing\\ArrayOfInventoryItem',
      'InventoryItem' => 'Ongoing\\InventoryItem',
      'GetGoodsStatusInventory' => 'Ongoing\\GetGoodsStatusInventory',
      'GoodsStatusInventoryQuery' => 'Ongoing\\GoodsStatusInventoryQuery',
      'GetGoodsStatusInventoryResponse' => 'Ongoing\\GetGoodsStatusInventoryResponse',
      'GoodsStatusInventoryResult' => 'Ongoing\\GoodsStatusInventoryResult',
      'ArrayOfGoodsStatusInventoryLine' => 'Ongoing\\ArrayOfGoodsStatusInventoryLine',
      'GoodsStatusInventoryLine' => 'Ongoing\\GoodsStatusInventoryLine',
      'ArrayOfGoodsStatusInventoryRow' => 'Ongoing\\ArrayOfGoodsStatusInventoryRow',
      'GoodsStatusInventoryRow' => 'Ongoing\\GoodsStatusInventoryRow',
      'GetInventoryChanges' => 'Ongoing\\GetInventoryChanges',
      'InventoryChangesQuery' => 'Ongoing\\InventoryChangesQuery',
      'GetInventoryChangesResponse' => 'Ongoing\\GetInventoryChangesResponse',
      'InventoryChangesResult' => 'Ongoing\\InventoryChangesResult',
      'ArrayOfInventoryChangeLine' => 'Ongoing\\ArrayOfInventoryChangeLine',
      'InventoryChangeLine' => 'Ongoing\\InventoryChangeLine',
      'ArrayOfInventoryTransaction' => 'Ongoing\\ArrayOfInventoryTransaction',
      'InventoryTransaction' => 'Ongoing\\InventoryTransaction',
      'GetOrder' => 'Ongoing\\GetOrder',
      'GetOrderResponse' => 'Ongoing\\GetOrderResponse',
      'Order' => 'Ongoing\\Order',
      'Consignee' => 'Ongoing\\Consignee',
      'ConsigneeInvoiceAddress' => 'Ongoing\\ConsigneeInvoiceAddress',
      'Consignor' => 'Ongoing\\Consignor',
      'GoodsOwnerInfo' => 'Ongoing\\GoodsOwnerInfo',
      'TransportPayer' => 'Ongoing\\TransportPayer',
      'Financial' => 'Ongoing\\Financial',
      'GoodsInfo' => 'Ongoing\\GoodsInfo',
      'OrderInfoType' => 'Ongoing\\OrderInfoType',
      'NotifyClass' => 'Ongoing\\NotifyClass',
      'CommunicationInfo' => 'Ongoing\\CommunicationInfo',
      'ArrayOfGoodsItem' => 'Ongoing\\ArrayOfGoodsItem',
      'GoodsItem' => 'Ongoing\\GoodsItem',
      'ArrayOfPickedOrderLine' => 'Ongoing\\ArrayOfPickedOrderLine',
      'PickedOrderLine' => 'Ongoing\\PickedOrderLine',
      'ArrayOfPickedArticleItem' => 'Ongoing\\ArrayOfPickedArticleItem',
      'PickedArticleItem' => 'Ongoing\\PickedArticleItem',
      'PickedArticleItemPalletItemInfo' => 'Ongoing\\PickedArticleItemPalletItemInfo',
      'TransporterClass' => 'Ongoing\\TransporterClass',
      'WsiSystem' => 'Ongoing\\WsiSystem',
      'ArrayOfOrderPalletItemInfo' => 'Ongoing\\ArrayOfOrderPalletItemInfo',
      'OrderPalletItemInfo' => 'Ongoing\\OrderPalletItemInfo',
      'GetInOrderByOrderNumber' => 'Ongoing\\GetInOrderByOrderNumber',
      'GetInOrderByOrderNumberResponse' => 'Ongoing\\GetInOrderByOrderNumberResponse',
      'ReceivedInOrder' => 'Ongoing\\ReceivedInOrder',
      'ReceivedInOrderInfoClass' => 'Ongoing\\ReceivedInOrderInfoClass',
      'ReceivedInOrderSupplier' => 'Ongoing\\ReceivedInOrderSupplier',
      'AddressClass' => 'Ongoing\\AddressClass',
      'GoodsOwner' => 'Ongoing\\GoodsOwner',
      'ArrayOfReceivedInOrderLine' => 'Ongoing\\ArrayOfReceivedInOrderLine',
      'ReceivedInOrderLine' => 'Ongoing\\ReceivedInOrderLine',
      'ArrayOfReceivedArticlItem' => 'Ongoing\\ArrayOfReceivedArticlItem',
      'ReceivedArticlItem' => 'Ongoing\\ReceivedArticlItem',
      'ArticleItemClassInfo' => 'Ongoing\\ArticleItemClassInfo',
      'GetOrderByOrderNumber' => 'Ongoing\\GetOrderByOrderNumber',
      'GetOrderByOrderNumberResponse' => 'Ongoing\\GetOrderByOrderNumberResponse',
      'GetOrderStatusReports' => 'Ongoing\\GetOrderStatusReports',
      'OrderStatusReportsQuery' => 'Ongoing\\OrderStatusReportsQuery',
      'GetOrderStatusReportsResponse' => 'Ongoing\\GetOrderStatusReportsResponse',
      'OrderStatusReportsResult' => 'Ongoing\\OrderStatusReportsResult',
      'ArrayOfOrderStatusReport' => 'Ongoing\\ArrayOfOrderStatusReport',
      'OrderStatusReport' => 'Ongoing\\OrderStatusReport',
      'GetOrdersByQuery' => 'Ongoing\\GetOrdersByQuery',
      'OrderFilters' => 'Ongoing\\OrderFilters',
      'ArrayOfInt' => 'Ongoing\\ArrayOfInt',
      'OrderSpecialFilters' => 'Ongoing\\OrderSpecialFilters',
      'GetOrdersByQueryResponse' => 'Ongoing\\GetOrdersByQueryResponse',
      'GetOrdersResult' => 'Ongoing\\GetOrdersResult',
      'ArrayOfOrder' => 'Ongoing\\ArrayOfOrder',
      'GetInOrdersByQuery' => 'Ongoing\\GetInOrdersByQuery',
      'InOrderFilters' => 'Ongoing\\InOrderFilters',
      'InOrderSpecialFilters' => 'Ongoing\\InOrderSpecialFilters',
      'GetInOrdersByQueryResponse' => 'Ongoing\\GetInOrdersByQueryResponse',
      'GetInOrdersResult' => 'Ongoing\\GetInOrdersResult',
      'ArrayOfReceivedInOrder' => 'Ongoing\\ArrayOfReceivedInOrder',
      'GetInOrderStatusReports' => 'Ongoing\\GetInOrderStatusReports',
      'InOrderStatusReportsQuery' => 'Ongoing\\InOrderStatusReportsQuery',
      'GetInOrderStatusReportsResponse' => 'Ongoing\\GetInOrderStatusReportsResponse',
      'InOrderStatusReportsResult' => 'Ongoing\\InOrderStatusReportsResult',
      'ArrayOfInOrderStatusReport' => 'Ongoing\\ArrayOfInOrderStatusReport',
      'InOrderStatusReport' => 'Ongoing\\InOrderStatusReport',
      'GetProductionOrdersByQuery' => 'Ongoing\\GetProductionOrdersByQuery',
      'ProductionOrderFilters' => 'Ongoing\\ProductionOrderFilters',
      'GetProductionOrdersByQueryResponse' => 'Ongoing\\GetProductionOrdersByQueryResponse',
      'GetProductionOrdersResult' => 'Ongoing\\GetProductionOrdersResult',
      'ArrayOfProductionOrderInfo' => 'Ongoing\\ArrayOfProductionOrderInfo',
      'ProductionOrderInfo' => 'Ongoing\\ProductionOrderInfo',
      'ProductionOrderHeaderInfo' => 'Ongoing\\ProductionOrderHeaderInfo',
      'ArrayOfProductionOrderLineInfo' => 'Ongoing\\ArrayOfProductionOrderLineInfo',
      'ProductionOrderLineInfo' => 'Ongoing\\ProductionOrderLineInfo',
      'GetShipmentsByQuery' => 'Ongoing\\GetShipmentsByQuery',
      'ShipmentFilters' => 'Ongoing\\ShipmentFilters',
      'GetShipmentsByQueryResponse' => 'Ongoing\\GetShipmentsByQueryResponse',
      'GetShipmentsResult' => 'Ongoing\\GetShipmentsResult',
      'ArrayOfShipmentInfo' => 'Ongoing\\ArrayOfShipmentInfo',
      'ShipmentInfo' => 'Ongoing\\ShipmentInfo',
      'ShipmentHeaderInfo' => 'Ongoing\\ShipmentHeaderInfo',
      'ShipmentRouteInfo' => 'Ongoing\\ShipmentRouteInfo',
      'ArrayOfShipmentContainerInfo' => 'Ongoing\\ArrayOfShipmentContainerInfo',
      'ShipmentContainerInfo' => 'Ongoing\\ShipmentContainerInfo',
      'ArrayOfShipmentContainerItemInfo' => 'Ongoing\\ArrayOfShipmentContainerItemInfo',
      'ShipmentContainerItemInfo' => 'Ongoing\\ShipmentContainerItemInfo',
      'ShipmentConsigneeInfo' => 'Ongoing\\ShipmentConsigneeInfo',
      'ShipmentConsignorInfo' => 'Ongoing\\ShipmentConsignorInfo',
      'ShipmentSupplierInfo' => 'Ongoing\\ShipmentSupplierInfo',
      'ShipmentPaymentInfo' => 'Ongoing\\ShipmentPaymentInfo',
      'GetInvoices' => 'Ongoing\\GetInvoices',
      'GetInvoicesQuery' => 'Ongoing\\GetInvoicesQuery',
      'GetInvoicesResponse' => 'Ongoing\\GetInvoicesResponse',
      'GetInvoicesResult' => 'Ongoing\\GetInvoicesResult',
      'ArrayOfInvoice' => 'Ongoing\\ArrayOfInvoice',
      'Invoice' => 'Ongoing\\Invoice',
      'ArrayOfInvoiceRow' => 'Ongoing\\ArrayOfInvoiceRow',
      'InvoiceRow' => 'Ongoing\\InvoiceRow',
      'InvoiceArticle' => 'Ongoing\\InvoiceArticle',
      'GetOrderStatusReport' => 'Ongoing\\GetOrderStatusReport',
      'GetOrderStatusReportResponse' => 'Ongoing\\GetOrderStatusReportResponse',
      'GetFileList' => 'Ongoing\\GetFileList',
      'FileSearchValues' => 'Ongoing\\FileSearchValues',
      'GetFileListResponse' => 'Ongoing\\GetFileListResponse',
      'FileList' => 'Ongoing\\FileList',
      'ArrayOfFileInfo' => 'Ongoing\\ArrayOfFileInfo',
      'FileInfo' => 'Ongoing\\FileInfo',
      'GetFile' => 'Ongoing\\GetFile',
      'GetFileResponse' => 'Ongoing\\GetFileResponse',
      'File' => 'Ongoing\\File',
      'ProcessInvoice' => 'Ongoing\\ProcessInvoice',
      'GoodsOwnerInvoice' => 'Ongoing\\GoodsOwnerInvoice',
      'ArrayOfGoodsOwnerInvoiceRow' => 'Ongoing\\ArrayOfGoodsOwnerInvoiceRow',
      'GoodsOwnerInvoiceRow' => 'Ongoing\\GoodsOwnerInvoiceRow',
      'GoodsOwnerInvoiceArticle' => 'Ongoing\\GoodsOwnerInvoiceArticle',
      'ProcessInvoiceResponse' => 'Ongoing\\ProcessInvoiceResponse',
      'FileResultClass' => 'Ongoing\\FileResultClass',
      'ProcessShipment' => 'Ongoing\\ProcessShipment',
      'Shipment' => 'Ongoing\\Shipment',
      'ShipmentHeader' => 'Ongoing\\ShipmentHeader',
      'ShipmentFunctions' => 'Ongoing\\ShipmentFunctions',
      'ShipmentContainerOwner' => 'Ongoing\\ShipmentContainerOwner',
      'ArrayOfShipmentContainer' => 'Ongoing\\ArrayOfShipmentContainer',
      'ShipmentContainer' => 'Ongoing\\ShipmentContainer',
      'ArrayOfShipmentContainerItem' => 'Ongoing\\ArrayOfShipmentContainerItem',
      'ShipmentContainerItem' => 'Ongoing\\ShipmentContainerItem',
      'ContainerType' => 'Ongoing\\ContainerType',
      'ShipmentContainerItemStatus' => 'Ongoing\\ShipmentContainerItemStatus',
      'ShipmentConsignee' => 'Ongoing\\ShipmentConsignee',
      'ShipmentConsignor' => 'Ongoing\\ShipmentConsignor',
      'ShipmentDestination' => 'Ongoing\\ShipmentDestination',
      'ArrayOfShipmentAddress' => 'Ongoing\\ArrayOfShipmentAddress',
      'ShipmentAddress' => 'Ongoing\\ShipmentAddress',
      'Supplier' => 'Ongoing\\Supplier',
      'ShipmentPayment' => 'Ongoing\\ShipmentPayment',
      'ProcessShipmentResponse' => 'Ongoing\\ProcessShipmentResponse',
      'ProcessInOrder' => 'Ongoing\\ProcessInOrder',
      'InOrder' => 'Ongoing\\InOrder',
      'InOrderInfoClass' => 'Ongoing\\InOrderInfoClass',
      'WayOfDeliveryType' => 'Ongoing\\WayOfDeliveryType',
      'InOrderType' => 'Ongoing\\InOrderType',
      'TermsOfDeliveryType' => 'Ongoing\\TermsOfDeliveryType',
      'InOrderCustomer' => 'Ongoing\\InOrderCustomer',
      'InOrderSupplier' => 'Ongoing\\InOrderSupplier',
      'ArrayOfInOrderLine' => 'Ongoing\\ArrayOfInOrderLine',
      'InOrderLine' => 'Ongoing\\InOrderLine',
      'ArrayOfInOrderLineArticleItem' => 'Ongoing\\ArrayOfInOrderLineArticleItem',
      'InOrderLineArticleItem' => 'Ongoing\\InOrderLineArticleItem',
      'InOrderLineArticleItemStatus' => 'Ongoing\\InOrderLineArticleItemStatus',
      'ProcessInOrderResponse' => 'Ongoing\\ProcessInOrderResponse',
      'ProcessOrder' => 'Ongoing\\ProcessOrder',
      'CustomerOrder' => 'Ongoing\\CustomerOrder',
      'OrderInfoClass' => 'Ongoing\\OrderInfoClass',
      'OrderType' => 'Ongoing\\OrderType',
      'TypeClass' => 'Ongoing\\TypeClass',
      'OrderNotification' => 'Ongoing\\OrderNotification',
      'OutboundWarehouse' => 'Ongoing\\OutboundWarehouse',
      'Customer' => 'Ongoing\\Customer',
      'Coordinates' => 'Ongoing\\Coordinates',
      'InvoiceAddress' => 'Ongoing\\InvoiceAddress',
      'CustomerGroup' => 'Ongoing\\CustomerGroup',
      'TransporterContractClass' => 'Ongoing\\TransporterContractClass',
      'ArrayOfCustomerOrderLine' => 'Ongoing\\ArrayOfCustomerOrderLine',
      'CustomerOrderLine' => 'Ongoing\\CustomerOrderLine',
      'ArrayOfSubOrderLine' => 'Ongoing\\ArrayOfSubOrderLine',
      'SubOrderLine' => 'Ongoing\\SubOrderLine',
      'VatCodeClass' => 'Ongoing\\VatCodeClass',
      'OrderLineArticleItemStatus' => 'Ongoing\\OrderLineArticleItemStatus',
      'ArrayOfCustomerOrderTextLine' => 'Ongoing\\ArrayOfCustomerOrderTextLine',
      'CustomerOrderTextLine' => 'Ongoing\\CustomerOrderTextLine',
      'ProcessOrderResponse' => 'Ongoing\\ProcessOrderResponse',
      'UpdateOrderLines' => 'Ongoing\\UpdateOrderLines',
      'UpdateOrderIdentification' => 'Ongoing\\UpdateOrderIdentification',
      'ArrayOfUpdateOrderLine' => 'Ongoing\\ArrayOfUpdateOrderLine',
      'UpdateOrderLine' => 'Ongoing\\UpdateOrderLine',
      'UpdateOrderLineIdentification' => 'Ongoing\\UpdateOrderLineIdentification',
      'UpdateOrderLineReportedNumberOfItems' => 'Ongoing\\UpdateOrderLineReportedNumberOfItems',
      'UpdateOrderLineComment' => 'Ongoing\\UpdateOrderLineComment',
      'UpdateOrderLinesResponse' => 'Ongoing\\UpdateOrderLinesResponse',
      'UpdateOrderLinesResult' => 'Ongoing\\UpdateOrderLinesResult',
      'UpdateInOrderLines' => 'Ongoing\\UpdateInOrderLines',
      'UpdateInOrderIdentification' => 'Ongoing\\UpdateInOrderIdentification',
      'ArrayOfUpdateInOrderLine' => 'Ongoing\\ArrayOfUpdateInOrderLine',
      'UpdateInOrderLine' => 'Ongoing\\UpdateInOrderLine',
      'UpdateInOrderLineIdentification' => 'Ongoing\\UpdateInOrderLineIdentification',
      'UpdateInOrderLineReportedNumberOfItems' => 'Ongoing\\UpdateInOrderLineReportedNumberOfItems',
      'UpdateInOrderLinesResponse' => 'Ongoing\\UpdateInOrderLinesResponse',
      'UpdateInOrderLinesResult' => 'Ongoing\\UpdateInOrderLinesResult',
      'UpdateInOrder' => 'Ongoing\\UpdateInOrder',
      'InOrderUpdateIdentification' => 'Ongoing\\InOrderUpdateIdentification',
      'UpdateInOrderStatus' => 'Ongoing\\UpdateInOrderStatus',
      'UpdateInOrderResponse' => 'Ongoing\\UpdateInOrderResponse',
      'UpdateInOrderResult' => 'Ongoing\\UpdateInOrderResult',
      'UpdateOrder' => 'Ongoing\\UpdateOrder',
      'OrderUpdateIdentification' => 'Ongoing\\OrderUpdateIdentification',
      'UpdateOrderStatus' => 'Ongoing\\UpdateOrderStatus',
      'UpdateOrderDeliveryDate' => 'Ongoing\\UpdateOrderDeliveryDate',
      'UpdateOrderGoodsOwnerOrderNumber' => 'Ongoing\\UpdateOrderGoodsOwnerOrderNumber',
      'UpdateOrderResponse' => 'Ongoing\\UpdateOrderResponse',
      'UpdateOrderResult' => 'Ongoing\\UpdateOrderResult',
      'UpdateShipment' => 'Ongoing\\UpdateShipment',
      'ShipmentUpdateIdentification' => 'Ongoing\\ShipmentUpdateIdentification',
      'UpdateShipmentComment' => 'Ongoing\\UpdateShipmentComment',
      'UpdateShipmentResponse' => 'Ongoing\\UpdateShipmentResponse',
      'UpdateShipmentResult' => 'Ongoing\\UpdateShipmentResult',
      'GetSystemStatus' => 'Ongoing\\GetSystemStatus',
      'GetSystemStatusResponse' => 'Ongoing\\GetSystemStatusResponse',
      'SystemStatus' => 'Ongoing\\SystemStatus',
      'ReportEvent' => 'Ongoing\\ReportEvent',
      'LogEvent' => 'Ongoing\\LogEvent',
      'ReportEventResponse' => 'Ongoing\\ReportEventResponse',
      'ProcessCustomer' => 'Ongoing\\ProcessCustomer',
      'ProcessCustomerResponse' => 'Ongoing\\ProcessCustomerResponse',
      'ProcessArticle' => 'Ongoing\\ProcessArticle',
      'ArticleDefinition' => 'Ongoing\\ArticleDefinition',
      'ArticleGroup' => 'Ongoing\\ArticleGroup',
      'ArticleStructureSpecification' => 'Ongoing\\ArticleStructureSpecification',
      'StructureArticleDefinition' => 'Ongoing\\StructureArticleDefinition',
      'ProcessArticleResponse' => 'Ongoing\\ProcessArticleResponse',
      'ProcessTrip' => 'Ongoing\\ProcessTrip',
      'Trip' => 'Ongoing\\Trip',
      'TripRoute' => 'Ongoing\\TripRoute',
      'ArrayOfTripStop' => 'Ongoing\\ArrayOfTripStop',
      'TripStop' => 'Ongoing\\TripStop',
      'ProcessTripResponse' => 'Ongoing\\ProcessTripResponse',
      'ProcessReturnOrder' => 'Ongoing\\ProcessReturnOrder',
      'ReturnOrder' => 'Ongoing\\ReturnOrder',
      'ReturnCause' => 'Ongoing\\ReturnCause',
      'ArrayOfReturnOrderLine' => 'Ongoing\\ArrayOfReturnOrderLine',
      'ReturnOrderLine' => 'Ongoing\\ReturnOrderLine',
      'ProcessReturnOrderResponse' => 'Ongoing\\ProcessReturnOrderResponse',
      'ProcessReturnOrderResult' => 'Ongoing\\ProcessReturnOrderResult',
      'ArrayOfProcessReturnOrderError' => 'Ongoing\\ArrayOfProcessReturnOrderError',
      'ProcessReturnOrderError' => 'Ongoing\\ProcessReturnOrderError',
      'GetReturnOrdersByQuery' => 'Ongoing\\GetReturnOrdersByQuery',
      'GetReturnOrdersQuery' => 'Ongoing\\GetReturnOrdersQuery',
      'GetReturnOrdersByQueryResponse' => 'Ongoing\\GetReturnOrdersByQueryResponse',
      'GetReturnOrdersResult' => 'Ongoing\\GetReturnOrdersResult',
      'ArrayOfReturnOrderInfo' => 'Ongoing\\ArrayOfReturnOrderInfo',
      'ReturnOrderInfo' => 'Ongoing\\ReturnOrderInfo',
      'ArrayOfReturnOrderLineInfo' => 'Ongoing\\ArrayOfReturnOrderLineInfo',
      'ReturnOrderLineInfo' => 'Ongoing\\ReturnOrderLineInfo',
      'ArrayOfGetReturnOrdersError' => 'Ongoing\\ArrayOfGetReturnOrdersError',
      'GetReturnOrdersError' => 'Ongoing\\GetReturnOrdersError',
      'GetTimeOfLastSync' => 'Ongoing\\GetTimeOfLastSync',
      'GetTimeOfLastSyncResponse' => 'Ongoing\\GetTimeOfLastSyncResponse',
      'SetTimeOfLastSync' => 'Ongoing\\SetTimeOfLastSync',
      'SetTimeOfLastSyncResponse' => 'Ongoing\\SetTimeOfLastSyncResponse',
      'UploadArticleDefFile' => 'Ongoing\\UploadArticleDefFile',
      'UploadArticleDefFileResponse' => 'Ongoing\\UploadArticleDefFileResponse',
      'UploadOrderFile' => 'Ongoing\\UploadOrderFile',
      'OrderFile' => 'Ongoing\\OrderFile',
      'UploadOrderFileResponse' => 'Ongoing\\UploadOrderFileResponse',
      'GetOrderStatuses' => 'Ongoing\\GetOrderStatuses',
      'GetOrderStatusesResponse' => 'Ongoing\\GetOrderStatusesResponse',
      'GetOrderStatusesResult' => 'Ongoing\\GetOrderStatusesResult',
      'ArrayOfOrderStatus' => 'Ongoing\\ArrayOfOrderStatus',
      'OrderStatus' => 'Ongoing\\OrderStatus',
      'GetInOrderStatuses' => 'Ongoing\\GetInOrderStatuses',
      'GetInOrderStatusesResponse' => 'Ongoing\\GetInOrderStatusesResponse',
      'GetInOrderStatusesResult' => 'Ongoing\\GetInOrderStatusesResult',
      'ArrayOfInOrderStatus' => 'Ongoing\\ArrayOfInOrderStatus',
      'InOrderStatus' => 'Ongoing\\InOrderStatus',
      'GetTransporterContracts' => 'Ongoing\\GetTransporterContracts',
      'GetTransporterContractsResponse' => 'Ongoing\\GetTransporterContractsResponse',
      'GetTransporterContractsResult' => 'Ongoing\\GetTransporterContractsResult',
      'ArrayOfTransporterContract' => 'Ongoing\\ArrayOfTransporterContract',
      'TransporterContract' => 'Ongoing\\TransporterContract',
      'ArrayOfTransporterService' => 'Ongoing\\ArrayOfTransporterService',
      'TransporterService' => 'Ongoing\\TransporterService',
      'GetWarehouseTransferOrderByQuery' => 'Ongoing\\GetWarehouseTransferOrderByQuery',
      'WarehouseTransferOrderFilters' => 'Ongoing\\WarehouseTransferOrderFilters',
      'GetWarehouseTransferOrderByQueryResponse' => 'Ongoing\\GetWarehouseTransferOrderByQueryResponse',
      'GetWarehouseTransferOrdersResult' => 'Ongoing\\GetWarehouseTransferOrdersResult',
      'ArrayOfWarehouseTransferOrderInfo' => 'Ongoing\\ArrayOfWarehouseTransferOrderInfo',
      'WarehouseTransferOrderInfo' => 'Ongoing\\WarehouseTransferOrderInfo',
      'WarehouseTransferOrderInfoHeader' => 'Ongoing\\WarehouseTransferOrderInfoHeader',
      'ArrayOfWarehouseTransferOrderLineInfo' => 'Ongoing\\ArrayOfWarehouseTransferOrderLineInfo',
      'WarehouseTransferOrderLineInfo' => 'Ongoing\\WarehouseTransferOrderLineInfo',
      'WarehouseTransferOrderLineArticleInfo' => 'Ongoing\\WarehouseTransferOrderLineArticleInfo',
      'ArrayOfTransferArticleItemInfo' => 'Ongoing\\ArrayOfTransferArticleItemInfo',
      'TransferArticleItemInfo' => 'Ongoing\\TransferArticleItemInfo',
      'ArrayOfOrderTrackingInfo' => 'Ongoing\\ArrayOfOrderTrackingInfo',
      'OrderTrackingInfo' => 'Ongoing\\OrderTrackingInfo',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = '')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * @param GetInventoryByQuery $parameters
     * @return GetInventoryByQueryResponse
     */
    public function GetInventoryByQuery(GetInventoryByQuery $parameters)
    {
      return $this->__soapCall('GetInventoryByQuery', array($parameters));
    }

    /**
     * @param GetInventory $parameters
     * @return GetInventoryResponse
     */
    public function GetInventory(GetInventory $parameters)
    {
      return $this->__soapCall('GetInventory', array($parameters));
    }

    /**
     * @param GetInventoryPerWarehouse $parameters
     * @return GetInventoryPerWarehouseResponse
     */
    public function GetInventoryPerWarehouse(GetInventoryPerWarehouse $parameters)
    {
      return $this->__soapCall('GetInventoryPerWarehouse', array($parameters));
    }

    /**
     * @param GetInventoryItems $parameters
     * @return GetInventoryItemsResponse
     */
    public function GetInventoryItems(GetInventoryItems $parameters)
    {
      return $this->__soapCall('GetInventoryItems', array($parameters));
    }

    /**
     * @param GetGoodsStatusInventory $parameters
     * @return GetGoodsStatusInventoryResponse
     */
    public function GetGoodsStatusInventory(GetGoodsStatusInventory $parameters)
    {
      return $this->__soapCall('GetGoodsStatusInventory', array($parameters));
    }

    /**
     * @param GetInventoryChanges $parameters
     * @return GetInventoryChangesResponse
     */
    public function GetInventoryChanges(GetInventoryChanges $parameters)
    {
      return $this->__soapCall('GetInventoryChanges', array($parameters));
    }

    /**
     * @param GetOrder $parameters
     * @return GetOrderResponse
     */
    public function GetOrder(GetOrder $parameters)
    {
      return $this->__soapCall('GetOrder', array($parameters));
    }

    /**
     * @param GetInOrderByOrderNumber $parameters
     * @return GetInOrderByOrderNumberResponse
     */
    public function GetInOrderByOrderNumber(GetInOrderByOrderNumber $parameters)
    {
      return $this->__soapCall('GetInOrderByOrderNumber', array($parameters));
    }

    /**
     * @param GetOrderByOrderNumber $parameters
     * @return GetOrderByOrderNumberResponse
     */
    public function GetOrderByOrderNumber(GetOrderByOrderNumber $parameters)
    {
      return $this->__soapCall('GetOrderByOrderNumber', array($parameters));
    }

    /**
     * @param GetOrderStatusReports $parameters
     * @return GetOrderStatusReportsResponse
     */
    public function GetOrderStatusReports(GetOrderStatusReports $parameters)
    {
      return $this->__soapCall('GetOrderStatusReports', array($parameters));
    }

    /**
     * @param GetOrdersByQuery $parameters
     * @return GetOrdersByQueryResponse
     */
    public function GetOrdersByQuery(GetOrdersByQuery $parameters)
    {
      return $this->__soapCall('GetOrdersByQuery', array($parameters));
    }

    /**
     * @param GetInOrdersByQuery $parameters
     * @return GetInOrdersByQueryResponse
     */
    public function GetInOrdersByQuery(GetInOrdersByQuery $parameters)
    {
      return $this->__soapCall('GetInOrdersByQuery', array($parameters));
    }

    /**
     * @param GetInOrderStatusReports $parameters
     * @return GetInOrderStatusReportsResponse
     */
    public function GetInOrderStatusReports(GetInOrderStatusReports $parameters)
    {
      return $this->__soapCall('GetInOrderStatusReports', array($parameters));
    }

    /**
     * @param GetProductionOrdersByQuery $parameters
     * @return GetProductionOrdersByQueryResponse
     */
    public function GetProductionOrdersByQuery(GetProductionOrdersByQuery $parameters)
    {
      return $this->__soapCall('GetProductionOrdersByQuery', array($parameters));
    }

    /**
     * @param GetShipmentsByQuery $parameters
     * @return GetShipmentsByQueryResponse
     */
    public function GetShipmentsByQuery(GetShipmentsByQuery $parameters)
    {
      return $this->__soapCall('GetShipmentsByQuery', array($parameters));
    }

    /**
     * @param GetInvoices $parameters
     * @return GetInvoicesResponse
     */
    public function GetInvoices(GetInvoices $parameters)
    {
      return $this->__soapCall('GetInvoices', array($parameters));
    }

    /**
     * @param GetOrderStatusReport $parameters
     * @return GetOrderStatusReportResponse
     */
    public function GetOrderStatusReport(GetOrderStatusReport $parameters)
    {
      return $this->__soapCall('GetOrderStatusReport', array($parameters));
    }

    /**
     * @param GetFileList $parameters
     * @return GetFileListResponse
     */
    public function GetFileList(GetFileList $parameters)
    {
      return $this->__soapCall('GetFileList', array($parameters));
    }

    /**
     * @param GetFile $parameters
     * @return GetFileResponse
     */
    public function GetFile(GetFile $parameters)
    {
      return $this->__soapCall('GetFile', array($parameters));
    }

    /**
     * @param ProcessInvoice $parameters
     * @return ProcessInvoiceResponse
     */
    public function ProcessInvoice(ProcessInvoice $parameters)
    {
      return $this->__soapCall('ProcessInvoice', array($parameters));
    }

    /**
     * @param ProcessShipment $parameters
     * @return ProcessShipmentResponse
     */
    public function ProcessShipment(ProcessShipment $parameters)
    {
      return $this->__soapCall('ProcessShipment', array($parameters));
    }

    /**
     * @param ProcessInOrder $parameters
     * @return ProcessInOrderResponse
     */
    public function ProcessInOrder(ProcessInOrder $parameters)
    {
      return $this->__soapCall('ProcessInOrder', array($parameters));
    }

    /**
     * @param ProcessOrder $parameters
     * @return ProcessOrderResponse
     */
    public function ProcessOrder(ProcessOrder $parameters)
    {
      return $this->__soapCall('ProcessOrder', array($parameters));
    }

    /**
     * @param UpdateOrderLines $parameters
     * @return UpdateOrderLinesResponse
     */
    public function UpdateOrderLines(UpdateOrderLines $parameters)
    {
      return $this->__soapCall('UpdateOrderLines', array($parameters));
    }

    /**
     * @param UpdateInOrderLines $parameters
     * @return UpdateInOrderLinesResponse
     */
    public function UpdateInOrderLines(UpdateInOrderLines $parameters)
    {
      return $this->__soapCall('UpdateInOrderLines', array($parameters));
    }

    /**
     * @param UpdateInOrder $parameters
     * @return UpdateInOrderResponse
     */
    public function UpdateInOrder(UpdateInOrder $parameters)
    {
      return $this->__soapCall('UpdateInOrder', array($parameters));
    }

    /**
     * @param UpdateOrder $parameters
     * @return UpdateOrderResponse
     */
    public function UpdateOrder(UpdateOrder $parameters)
    {
      return $this->__soapCall('UpdateOrder', array($parameters));
    }

    /**
     * @param UpdateShipment $parameters
     * @return UpdateShipmentResponse
     */
    public function UpdateShipment(UpdateShipment $parameters)
    {
      return $this->__soapCall('UpdateShipment', array($parameters));
    }

    /**
     * @param GetSystemStatus $parameters
     * @return GetSystemStatusResponse
     */
    public function GetSystemStatus(GetSystemStatus $parameters)
    {
      return $this->__soapCall('GetSystemStatus', array($parameters));
    }

    /**
     * @param ReportEvent $parameters
     * @return ReportEventResponse
     */
    public function ReportEvent(ReportEvent $parameters)
    {
      return $this->__soapCall('ReportEvent', array($parameters));
    }

    /**
     * @param ProcessCustomer $parameters
     * @return ProcessCustomerResponse
     */
    public function ProcessCustomer(ProcessCustomer $parameters)
    {
      return $this->__soapCall('ProcessCustomer', array($parameters));
    }

    /**
     * @param ProcessArticle $parameters
     * @return ProcessArticleResponse
     */
    public function ProcessArticle(ProcessArticle $parameters)
    {
      return $this->__soapCall('ProcessArticle', array($parameters));
    }

    /**
     * @param ProcessTrip $parameters
     * @return ProcessTripResponse
     */
    public function ProcessTrip(ProcessTrip $parameters)
    {
      return $this->__soapCall('ProcessTrip', array($parameters));
    }

    /**
     * @param ProcessReturnOrder $parameters
     * @return ProcessReturnOrderResponse
     */
    public function ProcessReturnOrder(ProcessReturnOrder $parameters)
    {
      return $this->__soapCall('ProcessReturnOrder', array($parameters));
    }

    /**
     * @param GetReturnOrdersByQuery $parameters
     * @return GetReturnOrdersByQueryResponse
     */
    public function GetReturnOrdersByQuery(GetReturnOrdersByQuery $parameters)
    {
      return $this->__soapCall('GetReturnOrdersByQuery', array($parameters));
    }

    /**
     * @param GetTimeOfLastSync $parameters
     * @return GetTimeOfLastSyncResponse
     */
    public function GetTimeOfLastSync(GetTimeOfLastSync $parameters)
    {
      return $this->__soapCall('GetTimeOfLastSync', array($parameters));
    }

    /**
     * @param SetTimeOfLastSync $parameters
     * @return SetTimeOfLastSyncResponse
     */
    public function SetTimeOfLastSync(SetTimeOfLastSync $parameters)
    {
      return $this->__soapCall('SetTimeOfLastSync', array($parameters));
    }

    /**
     * @param UploadArticleDefFile $parameters
     * @return UploadArticleDefFileResponse
     */
    public function UploadArticleDefFile(UploadArticleDefFile $parameters)
    {
      return $this->__soapCall('UploadArticleDefFile', array($parameters));
    }

    /**
     * @param UploadOrderFile $parameters
     * @return UploadOrderFileResponse
     */
    public function UploadOrderFile(UploadOrderFile $parameters)
    {
      return $this->__soapCall('UploadOrderFile', array($parameters));
    }

    /**
     * @param GetOrderStatuses $parameters
     * @return GetOrderStatusesResponse
     */
    public function GetOrderStatuses(GetOrderStatuses $parameters)
    {
      return $this->__soapCall('GetOrderStatuses', array($parameters));
    }

    /**
     * @param GetInOrderStatuses $parameters
     * @return GetInOrderStatusesResponse
     */
    public function GetInOrderStatuses(GetInOrderStatuses $parameters)
    {
      return $this->__soapCall('GetInOrderStatuses', array($parameters));
    }

    /**
     * @param GetTransporterContracts $parameters
     * @return GetTransporterContractsResponse
     */
    public function GetTransporterContracts(GetTransporterContracts $parameters)
    {
      return $this->__soapCall('GetTransporterContracts', array($parameters));
    }

    /**
     * @param GetWarehouseTransferOrderByQuery $parameters
     * @return GetWarehouseTransferOrderByQueryResponse
     */
    public function GetWarehouseTransferOrderByQuery(GetWarehouseTransferOrderByQuery $parameters)
    {
      return $this->__soapCall('GetWarehouseTransferOrderByQuery', array($parameters));
    }

}
