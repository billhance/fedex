<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data returned to a client in response to a cancel dispatch request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_CancelPickupReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_PickupService_CancelPickupReply
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
     * return FedEx_PickupService_CancelPickupReply
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
     * return FedEx_PickupService_CancelPickupReply
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
     * return FedEx_PickupService_CancelPickupReply
     */
    public function setVersion(FedEx_PickupService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Human readable message from dispatch system.
     *
     * @param string $Message
     * return FedEx_PickupService_CancelPickupReply
     */
    public function setMessage($message)
    {
        $this->Message = $message;
        return $this;
    }
    

    
}