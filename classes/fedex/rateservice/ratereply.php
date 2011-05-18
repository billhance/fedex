<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The response to a RateRequest. The Notifications indicate whether the request was successful or not.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_RateReply
    extends FedEx_AbstractComplexType
{

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_RateService_RateReply
     */
    public function setHighestSeverity(FedEx_RateService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_RateService_RateReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Contains the CustomerTransactionId that was sent in the request.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_RateService_RateReply
     */
    public function setTransactionDetail(FedEx_RateService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * The version of this reply.
     *
     * @param VersionId $Version
     * return FedEx_RateService_RateReply
     */
    public function setVersion(FedEx_RateService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Each element contains all rate data for a single service. If service was specified in the request, there will be a single entry in this array; if service was omitted in the request, there will be a separate entry in this array for each service being compared.
     *
     * @param array[RateReplyDetail] $RateReplyDetails
     * return FedEx_RateService_RateReply
     */
    public function setRateReplyDetails(array $rateReplyDetails)
    {
        $this->RateReplyDetails = $rateReplyDetails;
        return $this;
    }
    

    
}