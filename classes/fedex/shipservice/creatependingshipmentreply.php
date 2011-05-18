<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Reply to the Close Request transaction. The Close Reply bring back the ASCII data buffer which will be used to print the Close Manifest. The Manifest is essential at the time of pickup.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CreatePendingShipmentReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_ShipService_CreatePendingShipmentReply
     */
    public function setHighestSeverity(FedEx_ShipService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_ShipService_CreatePendingShipmentReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_ShipService_CreatePendingShipmentReply
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
     * return FedEx_ShipService_CreatePendingShipmentReply
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
     * return FedEx_ShipService_CreatePendingShipmentReply
     */
    public function setCompletedShipmentDetail(FedEx_ShipService_CompletedShipmentDetail $completedShipmentDetail)
    {
        $this->CompletedShipmentDetail = $completedShipmentDetail;
        return $this;
    }
    

    
}