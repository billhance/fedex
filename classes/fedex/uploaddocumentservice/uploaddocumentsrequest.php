<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_UploadDocumentsRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_UploadDocumentService_UploadDocumentsRequest
     */
    public function setWebAuthenticationDetail(FedEx_UploadDocumentService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_UploadDocumentService_UploadDocumentsRequest
     */
    public function setClientDetail(FedEx_UploadDocumentService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_UploadDocumentService_UploadDocumentsRequest
     */
    public function setTransactionDetail(FedEx_UploadDocumentService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_UploadDocumentService_UploadDocumentsRequest
     */
    public function setVersion(FedEx_UploadDocumentService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $OriginCountryCode
     * return FedEx_UploadDocumentService_UploadDocumentsRequest
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->OriginCountryCode = $originCountryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $DestinationCountryCode
     * return FedEx_UploadDocumentService_UploadDocumentsRequest
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentDetail] $Documents
     * return FedEx_UploadDocumentService_UploadDocumentsRequest
     */
    public function setDocuments(array $documents)
    {
        $this->Documents = $documents;
        return $this;
    }
    

    
}