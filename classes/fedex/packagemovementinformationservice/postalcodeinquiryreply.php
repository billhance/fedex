<?php defined('SYSPATH') or die('No direct script access.');

/**
 * FedEx Postal Code Inquiry reply.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PackageMovementInformationService_PostalCodeInquiryReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryReply
     */
    public function setHighestSeverity(FedEx_PackageMovementInformationService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryReply
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
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryReply
     */
    public function setTransactionDetail(FedEx_PackageMovementInformationService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryReply
     */
    public function setVersion(FedEx_PackageMovementInformationService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Flag identifying whether Express Freight Contractor Delivery Area.
     *
     * @param boolean $ExpressFreightContractorDeliveryArea
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryReply
     */
    public function setExpressFreightContractorDeliveryArea($expressFreightContractorDeliveryArea)
    {
        $this->ExpressFreightContractorDeliveryArea = $expressFreightContractorDeliveryArea;
        return $this;
    }
    
    /**
     * Postal code service area description for Express.
     *
     * @param PostalCodeServiceAreaDescription $ExpressDescription
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryReply
     */
    public function setExpressDescription(FedEx_PackageMovementInformationService_PostalCodeServiceAreaDescription $expressDescription)
    {
        $this->ExpressDescription = $expressDescription;
        return $this;
    }
    
    /**
     * Postal code service area description for Express Freight.
     *
     * @param PostalCodeServiceAreaDescription $ExpressFreightDescription
     * return FedEx_PackageMovementInformationService_PostalCodeInquiryReply
     */
    public function setExpressFreightDescription(FedEx_PackageMovementInformationService_PostalCodeServiceAreaDescription $expressFreightDescription)
    {
        $this->ExpressFreightDescription = $expressFreightDescription;
        return $this;
    }
    

    
}