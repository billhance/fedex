<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_GroundCloseDocumentsReply
    extends FedEx_AbstractComplexType
{

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_CloseService_GroundCloseDocumentsReply
     */
    public function setHighestSeverity(FedEx_CloseService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_CloseService_GroundCloseDocumentsReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_CloseService_GroundCloseDocumentsReply
     */
    public function setTransactionDetail(FedEx_CloseService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_CloseService_GroundCloseDocumentsReply
     */
    public function setVersion(FedEx_CloseService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The actual document contents for all provided reports.
     *
     * @param array[CloseDocument] $CloseDocuments
     * return FedEx_CloseService_GroundCloseDocumentsReply
     */
    public function setCloseDocuments(array $closeDocuments)
    {
        $this->CloseDocuments = $closeDocuments;
        return $this;
    }
    

    
}