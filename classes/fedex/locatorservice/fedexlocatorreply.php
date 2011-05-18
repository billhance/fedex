<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_LocatorService_FedExLocatorReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_LocatorService_FedExLocatorReply
     */
    public function setHighestSeverity(FedEx_LocatorService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_LocatorService_FedExLocatorReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.	The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_LocatorService_FedExLocatorReply
     */
    public function setTransactionDetail(FedEx_LocatorService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_LocatorService_FedExLocatorReply
     */
    public function setVersion(FedEx_LocatorService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Descriptive data for each of the drop-off locations matches found.
     *
     * @param array[DropoffLocation] $DropoffLocations
     * return FedEx_LocatorService_FedExLocatorReply
     */
    public function setDropoffLocations(array $dropoffLocations)
    {
        $this->DropoffLocations = $dropoffLocations;
        return $this;
    }
    
    /**
     * The total number of locations that matched the request criteria.
     *
     * @param int $AvailableRecordCount
     * return FedEx_LocatorService_FedExLocatorReply
     */
    public function setAvailableRecordCount($availableRecordCount)
    {
        $this->AvailableRecordCount = $availableRecordCount;
        return $this;
    }
    

    
}