<?php defined('SYSPATH') or die('No direct script access.');

/**
 * FedEx Track Notification request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackNotificationRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setWebAuthenticationDetail(FedEx_TrackService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * The descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setClientDetail(FedEx_TrackService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * The descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_TrackService_TrackNotificationRequest
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
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setVersion(FedEx_TrackService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Tracking number.
     *
     * @param string $TrackingNumber
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Indicates whether to return tracking information for all associated packages.
     *
     * @param boolean $MultiPiece
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setMultiPiece($multiPiece)
    {
        $this->MultiPiece = $multiPiece;
        return $this;
    }
    
    /**
     * To obtain additional data on second and subsequent TrackNotification requests.Client must submit this value in subsequent track requests in order to obtain next page of data. Must contain at least four characters.
     *
     * @param string $PagingToken
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setPagingToken($pagingToken)
    {
        $this->PagingToken = $pagingToken;
        return $this;
    }
    
    /**
     * Populate only if the TrackingNumberUniqueId is known from a previous Tracking request or an Email notifications request that resulted in a duplicate reply.
     *
     * @param string $TrackingNumberUniqueId
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setTrackingNumberUniqueId($trackingNumberUniqueId)
    {
        $this->TrackingNumberUniqueId = $trackingNumberUniqueId;
        return $this;
    }
    
    /**
     * Recommend providing date range to find desired track number by limiting the results to this range. If not provided FedEx will default to a range that may not be useful for the search.
     *
     * @param date $ShipDateRangeBegin
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setShipDateRangeBegin($shipDateRangeBegin)
    {
        $this->ShipDateRangeBegin = $shipDateRangeBegin;
        return $this;
    }
    
    /**
     * If provided, ShipDateRangeBegin is required. 
     *
     * @param date $ShipDateRangeEnd
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setShipDateRangeEnd($shipDateRangeEnd)
    {
        $this->ShipDateRangeEnd = $shipDateRangeEnd;
        return $this;
    }
    
    /**
     * Included in the notification identifying the requester of this notification.
     *
     * @param string $SenderEMailAddress
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setSenderEMailAddress($senderEMailAddress)
    {
        $this->SenderEMailAddress = $senderEMailAddress;
        return $this;
    }
    
    /**
     * Included in the notification identifying the requester of this notification.
     *
     * @param string $SenderContactName
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setSenderContactName($senderContactName)
    {
        $this->SenderContactName = $senderContactName;
        return $this;
    }
    
    /**
     * Email notification details.
     *
     * @param EMailNotificationDetail $NotificationDetail
     * return FedEx_TrackService_TrackNotificationRequest
     */
    public function setNotificationDetail(FedEx_TrackService_EMailNotificationDetail $notificationDetail)
    {
        $this->NotificationDetail = $notificationDetail;
        return $this;
    }
    

    
}