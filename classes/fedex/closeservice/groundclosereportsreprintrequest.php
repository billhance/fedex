<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_GroundCloseReportsReprintRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_CloseService_GroundCloseReportsReprintRequest
     */
    public function setWebAuthenticationDetail(FedEx_CloseService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_CloseService_GroundCloseReportsReprintRequest
     */
    public function setClientDetail(FedEx_CloseService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_CloseService_GroundCloseReportsReprintRequest
     */
    public function setTransactionDetail(FedEx_CloseService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return FedEx_CloseService_GroundCloseReportsReprintRequest
     */
    public function setVersion(FedEx_CloseService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $ReportDate
     * return FedEx_CloseService_GroundCloseReportsReprintRequest
     */
    public function setReportDate($reportDate)
    {
        $this->ReportDate = $reportDate;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $TrackingNumber
     * return FedEx_CloseService_GroundCloseReportsReprintRequest
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param CloseReportType $CloseReportType
     * return FedEx_CloseService_GroundCloseReportsReprintRequest
     */
    public function setCloseReportType(FedEx_CloseService_CloseReportType $closeReportType)
    {
        $this->CloseReportType = $closeReportType;
        return $this;
    }
    

    
}