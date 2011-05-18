<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data returned from a FedEx package tracking request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_TrackService_TrackReply
     */
    public function setHighestSeverity(FedEx_TrackService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_TrackService_TrackReply
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
     * return FedEx_TrackService_TrackReply
     */
    public function setTransactionDetail(FedEx_TrackService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_TrackService_TrackReply
     */
    public function setVersion(FedEx_TrackService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * True if duplicates exist that requires further request detail to qualify the specific shipment. Returned if a track by number results in duplicates
     *
     * @param boolean $DuplicateWaybill
     * return FedEx_TrackService_TrackReply
     */
    public function setDuplicateWaybill($duplicateWaybill)
    {
        $this->DuplicateWaybill = $duplicateWaybill;
        return $this;
    }
    
    /**
     * True if more data exists. Returned if a track by number results in duplicates.
     *
     * @param boolean $MoreData
     * return FedEx_TrackService_TrackReply
     */
    public function setMoreData($moreData)
    {
        $this->MoreData = $moreData;
        return $this;
    }
    
    /**
     * Populated in the response when more related tracking information exist that exceed the capacity of any one response structure. Client should populate PagingToken value in subsequent track requests with the value returned in the previous reply. DO not modify the field value. Returned if a track by number results in duplicates.
     *
     * @param string $PagingToken
     * return FedEx_TrackService_TrackReply
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Holds detailed tracking information for the requested package.
     *
     * @param array[TrackDetail] $TrackDetails
     * return FedEx_TrackService_TrackReply
     */
    public function setTrackDetails(array $trackDetails)
    {
        $this->TrackDetails = $trackDetails;
        return $this;
    }
    

    
}