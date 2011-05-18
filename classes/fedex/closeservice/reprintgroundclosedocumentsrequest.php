<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_ReprintGroundCloseDocumentsRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_CloseService_ReprintGroundCloseDocumentsRequest
     */
    public function setWebAuthenticationDetail(FedEx_CloseService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_CloseService_ReprintGroundCloseDocumentsRequest
     */
    public function setClientDetail(FedEx_CloseService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_CloseService_ReprintGroundCloseDocumentsRequest
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
     * return FedEx_CloseService_ReprintGroundCloseDocumentsRequest
     */
    public function setVersion(FedEx_CloseService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param ReprintGroundCloseDocumentsOptionType $ReprintOption
     * return FedEx_CloseService_ReprintGroundCloseDocumentsRequest
     */
    public function setReprintOption(FedEx_CloseService_ReprintGroundCloseDocumentsOptionType $reprintOption)
    {
        $this->ReprintOption = $reprintOption;
        return $this;
    }
    
    /**
     * Date on which shipments were closed.
     *
     * @param date $CloseDate
     * return FedEx_CloseService_ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDate($closeDate)
    {
        $this->CloseDate = $closeDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TrackingNumber
     * return FedEx_CloseService_ReprintGroundCloseDocumentsRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Specifies characteristics of document(s) to be returned for this request.
     *
     * @param CloseDocumentSpecification $CloseDocumentSpecification
     * return FedEx_CloseService_ReprintGroundCloseDocumentsRequest
     */
    public function setCloseDocumentSpecification(FedEx_CloseService_CloseDocumentSpecification $closeDocumentSpecification)
    {
        $this->CloseDocumentSpecification = $closeDocumentSpecification;
        return $this;
    }
    

    
}