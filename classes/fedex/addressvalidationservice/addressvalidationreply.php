<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_AddressValidationReply
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_AddressValidationService_AddressValidationReply
     */
    public function setHighestSeverity(FedEx_AddressValidationService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Notification] $Notifications
     * return FedEx_AddressValidationService_AddressValidationReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_AddressValidationService_AddressValidationReply
     */
    public function setTransactionDetail(FedEx_AddressValidationService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return FedEx_AddressValidationService_AddressValidationReply
     */
    public function setVersion(FedEx_AddressValidationService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param dateTime $ReplyTimestamp
     * return FedEx_AddressValidationService_AddressValidationReply
     */
    public function setReplyTimestamp($replyTimestamp)
    {
        $this->ReplyTimestamp = $replyTimestamp;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AddressValidationResult] $AddressResults
     * return FedEx_AddressValidationService_AddressValidationReply
     */
    public function setAddressResults(array $addressResults)
    {
        $this->AddressResults = $addressResults;
        return $this;
    }
    

    
}