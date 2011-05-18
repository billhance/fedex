<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Information about the routing, origin, destination and delivery of a shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_RoutingDetail
    extends FedEx_AbstractComplexType
{

    /**
     * The routing information detail for this shipment.
     *
     * @param ShipmentRoutingDetail $ShipmentRoutingDetail
     * return FedEx_ShipService_RoutingDetail
     */
    public function setShipmentRoutingDetail(FedEx_ShipService_ShipmentRoutingDetail $shipmentRoutingDetail)
    {
        $this->ShipmentRoutingDetail = $shipmentRoutingDetail;
        return $this;
    }
    
    /**
     * The tracking number information and the data to form the Astra barcode for the label.
     *
     * @param array[RoutingAstraDetail] $AstraDetails
     * return FedEx_ShipService_RoutingDetail
     */
    public function setAstraDetails(array $astraDetails)
    {
        $this->AstraDetails = $astraDetails;
        return $this;
    }
    

    
}