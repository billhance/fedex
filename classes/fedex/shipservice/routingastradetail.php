<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The tracking number information and the data to form the Astra barcode for the label.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_RoutingAstraDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The tracking number information for the shipment.
     *
     * @param TrackingId $TrackingId
     * return FedEx_ShipService_RoutingAstraDetail
     */
    public function setTrackingId(FedEx_ShipService_TrackingId $trackingId)
    {
        $this->TrackingId = $trackingId;
        return $this;
    }
    
    /**
     * 
     *
     * @param StringBarcode $Barcode
     * return FedEx_ShipService_RoutingAstraDetail
     */
    public function setBarcode(FedEx_ShipService_StringBarcode $barcode)
    {
        $this->Barcode = $barcode;
        return $this;
    }
    
    /**
     * The textual description of the special service applied to the package.
     *
     * @param string $AstraHandlingText
     * return FedEx_ShipService_RoutingAstraDetail
     */
    public function setAstraHandlingText($astraHandlingText)
    {
        $this->AstraHandlingText = $astraHandlingText;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AstraLabelElement] $AstraLabelElements
     * return FedEx_ShipService_RoutingAstraDetail
     */
    public function setAstraLabelElements(array $astraLabelElements)
    {
        $this->AstraLabelElements = $astraLabelElements;
        return $this;
    }
    

    
}