<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_QualifiedTrackingNumber
    extends FedEx_AbstractComplexType
{

    /**
     * Tracking number of package.
     *
     * @param string $TrackingNumber
     * return FedEx_TrackService_QualifiedTrackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Date on which package was tendered to FedEx.
     *
     * @param date $ShipDate
     * return FedEx_TrackService_QualifiedTrackingNumber
     */
    public function setShipDate($shipDate)
    {
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Account number associated with shipment (as opposed to account number in ClientDetail, which is that of party sending request).
     *
     * @param string $AccountNumber
     * return FedEx_TrackService_QualifiedTrackingNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param CarrierCodeType $Carrier
     * return FedEx_TrackService_QualifiedTrackingNumber
     */
    public function setCarrier(FedEx_TrackService_CarrierCodeType $carrier)
    {
        $this->Carrier = $carrier;
        return $this;
    }
    
    /**
     * 
     *
     * @param Address $Destination
     * return FedEx_TrackService_QualifiedTrackingNumber
     */
    public function setDestination(FedEx_TrackService_Address $destination)
    {
        $this->Destination = $destination;
        return $this;
    }
    

    
}