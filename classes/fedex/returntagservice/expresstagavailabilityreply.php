<?php defined('SYSPATH') or die('No direct script access.');

/**
 * FedEx Express Tag Availability reply.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ReturnTagService_ExpressTagAvailabilityReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_ReturnTagService_ExpressTagAvailabilityReply
     */
    public function setHighestSeverity(FedEx_ReturnTagService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_ReturnTagService_ExpressTagAvailabilityReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_ReturnTagService_ExpressTagAvailabilityReply
     */
    public function setTransactionDetail(FedEx_ReturnTagService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_ReturnTagService_ExpressTagAvailabilityReply
     */
    public function setVersion(FedEx_ReturnTagService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * This is the minimum time window that must be allocated for the FedEx courier to make the pickup. This is a length of time. The difference between the Business close time, (or the local Cutoff time if it is earlier than  the Business Close time), and the Ready Time must be equal to or exceed the access time.
     *
     * @param time $AccessTime
     * return FedEx_ReturnTagService_ExpressTagAvailabilityReply
     */
    public function setAccessTime($accessTime)
    {
        $this->AccessTime = $accessTime;
        return $this;
    }
    
    /**
     * Latest time a FedEx courier will be available to pick up the package from the Sender.
     *
     * @param time $ReadyTime
     * return FedEx_ReturnTagService_ExpressTagAvailabilityReply
     */
    public function setReadyTime($readyTime)
    {
        $this->ReadyTime = $readyTime;
        return $this;
    }
    
    /**
     * Indicates the Express Tag Service availability at the sender postal code indicated in the request.
     *
     * @param ExpressTagAvailabilityType $Availability
     * return FedEx_ReturnTagService_ExpressTagAvailabilityReply
     */
    public function setAvailability(FedEx_ReturnTagService_ExpressTagAvailabilityType $availability)
    {
        $this->Availability = $availability;
        return $this;
    }
    

    
}