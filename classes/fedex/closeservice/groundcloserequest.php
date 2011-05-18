<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_GroundCloseRequest
    extends FedEx_AbstractComplexType
{

    /**
     * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_CloseService_GroundCloseRequest
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
     * return FedEx_CloseService_GroundCloseRequest
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
     * return FedEx_CloseService_GroundCloseRequest
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
     * return FedEx_CloseService_GroundCloseRequest
     */
    public function setVersion(FedEx_CloseService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Identifies the date and time up to which unclosed shipments are to be closed. Both the date and time portions of the string are expected to be used. The time is the local time based on the shipper's time zone. The date component must be in the format: YYYY-MM-DD (e.g. 2009-04-26). The time component must be in the format: HH:MM:SS using a 24 hour clock (e.g. 11:00 a.m. is 11:00:00, whereas 5:00 p.m. is 17:00:00). The date and time parts are separated by a T (e.g. 2009-04-26T17:00:00).
     *
     * @param dateTime $TimeUpToWhichShipmentsAreToBeClosed
     * return FedEx_CloseService_GroundCloseRequest
     */
    public function setTimeUpToWhichShipmentsAreToBeClosed($timeUpToWhichShipmentsAreToBeClosed)
    {
        $this->TimeUpToWhichShipmentsAreToBeClosed = $timeUpToWhichShipmentsAreToBeClosed;
        return $this;
    }
    

    
}