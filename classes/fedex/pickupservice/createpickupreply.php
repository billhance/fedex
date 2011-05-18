<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data returned to a client in response to a shipment pickup request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_CreatePickupReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setHighestSeverity(FedEx_PickupService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_PickupService_CreatePickupReply
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
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setTransactionDetail(FedEx_PickupService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setVersion(FedEx_PickupService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the confirmation number assigned by FedEx for the request.
     *
     * @param string $PickupConfirmationNumber
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setPickupConfirmationNumber($pickupConfirmationNumber)
    {
        $this->PickupConfirmationNumber = $pickupConfirmationNumber;
        return $this;
    }
    
    /**
     * Identifies the FedEx Location identifier responsible for processing the pickup of the package.
     *
     * @param string $Location
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setLocation($location)
    {
        $this->Location = $location;
        return $this;
    }
    
    /**
     * Coded value supplied by dispatch system.
     *
     * @param string $MessageCode
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setMessageCode($messageCode)
    {
        $this->MessageCode = $messageCode;
        return $this;
    }
    
    /**
     * Message supplied by dispatch system.
     *
     * @param string $Message
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    
    /**
     * Package Return Program control number
     *
     * @param string $PRPControlNumber
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setPRPControlNumber($pRPControlNumber)
    {
        $this->PRPControlNumber = $pRPControlNumber;
        return $this;
    }
    
    /**
     * Used with "stay late" requests; postal-code specific.
     *
     * @param time $LastAccessTime
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setLastAccessTime($lastAccessTime)
    {
        $this->LastAccessTime = $lastAccessTime;
        return $this;
    }
    
    /**
     * Data resulting from the processing of an LTL Freight pickup request.
     *
     * @param CompletedFreightPickupDetail $CompletedFreightPickupDetail
     * return FedEx_PickupService_CreatePickupReply
     */
    public function setCompletedFreightPickupDetail(FedEx_PickupService_CompletedFreightPickupDetail $completedFreightPickupDetail)
    {
        $this->CompletedFreightPickupDetail = $completedFreightPickupDetail;
        return $this;
    }
    

    
}