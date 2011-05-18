<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ProcessShipmentReply
    extends FedEx_AbstractComplexType
{

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_ShipService_ProcessShipmentReply
     */
    public function setHighestSeverity(FedEx_ShipService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_ShipService_ProcessShipmentReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_ShipService_ProcessShipmentReply
     */
    public function setTransactionDetail(FedEx_ShipService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_ShipService_ProcessShipmentReply
     */
    public function setVersion(FedEx_ShipService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The reply payload. All of the returned information about this shipment/package.
     *
     * @param CompletedShipmentDetail $CompletedShipmentDetail
     * return FedEx_ShipService_ProcessShipmentReply
     */
    public function setCompletedShipmentDetail(FedEx_ShipService_CompletedShipmentDetail $completedShipmentDetail)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    
    /**
     * Empty unless error label behavior is PACKAGE_ERROR_LABELS and one or more errors occured during transaction processing.
     *
     * @param array[ShippingDocument] $ErrorLabels
     * return FedEx_ShipService_ProcessShipmentReply
     */
    public function setErrorLabels(array $errorLabels)
    {
        $this->ErrorLabels = $errorLabels;
        return $this;
    }
    

    
}