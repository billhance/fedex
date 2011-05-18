<?php defined('SYSPATH') or die('No direct script access.');

/**
 * FedEx Signature Proof Of Delivery Fax request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
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
     * return FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
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
     * return FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
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
     * return FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
     */
    public function setVersion(FedEx_TrackService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Tracking number and additional shipment data used to identify a unique shipment for proof of delivery.
     *
     * @param QualifiedTrackingNumber $QualifiedTrackingNumber
     * return FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
     */
    public function setQualifiedTrackingNumber(FedEx_TrackService_QualifiedTrackingNumber $qualifiedTrackingNumber)
    {
        $this->QualifiedTrackingNumber = $qualifiedTrackingNumber;
        return $this;
    }
    
    /**
     * More information.
     *
     * @param string $AdditionalComments
     * return FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
     */
    public function setAdditionalComments($additionalComments)
    {
        $this->AdditionalComments = $additionalComments;
        return $this;
    }
    
    /**
     * 
     *
     * @param ContactAndAddress $FaxSender
     * return FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxSender(FedEx_TrackService_ContactAndAddress $faxSender)
    {
        $this->FaxSender = $faxSender;
        return $this;
    }
    
    /**
     * Identifies the recipient's fax details.
     *
     * @param ContactAndAddress $FaxRecipient
     * return FedEx_TrackService_SignatureProofOfDeliveryFaxRequest
     */
    public function setFaxRecipient(FedEx_TrackService_ContactAndAddress $faxRecipient)
    {
        $this->FaxRecipient = $faxRecipient;
        return $this;
    }
    

    
}