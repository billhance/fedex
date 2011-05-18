<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data returned to a client in response to a cancel dispatch request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_PickupAvailabilityReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_PickupService_PickupAvailabilityReply
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
     * return FedEx_PickupService_PickupAvailabilityReply
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
     * return FedEx_PickupService_PickupAvailabilityReply
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
     * return FedEx_PickupService_PickupAvailabilityReply
     */
    public function setVersion(FedEx_PickupService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * the point in time when the request was processed
     *
     * @param dateTime $RequestTimestamp
     * return FedEx_PickupService_PickupAvailabilityReply
     */
    public function setRequestTimestamp($requestTimestamp)
    {
        $this->RequestTimestamp = $requestTimestamp;
        return $this;
    }
    
    /**
     * Identifies the options for picking up the shipment.
     *
     * @param array[PickupScheduleOption] $Options
     * return FedEx_PickupService_PickupAvailabilityReply
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Identifies whether the close time is specified by the customer or is the default time.
     *
     * @param CloseTimeType $CloseTimeType
     * return FedEx_PickupService_PickupAvailabilityReply
     */
    public function setCloseTimeType(FedEx_PickupService_CloseTimeType $closeTimeType)
    {
        $this->CloseTimeType = $closeTimeType;
        return $this;
    }
    
    /**
     * Close time corresponding to the above specified type
     *
     * @param time $CloseTime
     * return FedEx_PickupService_PickupAvailabilityReply
     */
    public function setCloseTime($closeTime)
    {
        $this->CloseTime = $closeTime;
        return $this;
    }
    
    /**
     * Local time of the service center that will service the pickup
     *
     * @param time $LocalTime
     * return FedEx_PickupService_PickupAvailabilityReply
     */
    public function setLocalTime($localTime)
    {
        $this->LocalTime = $localTime;
        return $this;
    }
    

    
}