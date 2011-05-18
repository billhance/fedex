<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data sent to FedEx by a customer in order to Cancel a Pending shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CancelPendingShipmentRequest
    extends FedEx_AbstractComplexType
{

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $WebAuthenticationDetail
     * return FedEx_ShipService_CancelPendingShipmentRequest
     */
    public function setWebAuthenticationDetail(FedEx_ShipService_WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Descriptive data identifying the client submitting the transaction.
     *
     * @param ClientDetail $ClientDetail
     * return FedEx_ShipService_CancelPendingShipmentRequest
     */
    public function setClientDetail(FedEx_ShipService_ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_ShipService_CancelPendingShipmentRequest
     */
    public function setTransactionDetail(FedEx_ShipService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_ShipService_CancelPendingShipmentRequest
     */
    public function setVersion(FedEx_ShipService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param TrackingId $TrackingId
     * return FedEx_ShipService_CancelPendingShipmentRequest
     */
    public function setTrackingId(FedEx_ShipService_TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    

    
}