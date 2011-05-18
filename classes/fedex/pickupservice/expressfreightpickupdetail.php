<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data regarding an express freight service pickup request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_ExpressFreightPickupDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the collection of available FedEx transportation service options. Must be a valid FedEx freight service identifier.
     *
     * @param ServiceType $Service
     * return FedEx_PickupService_ExpressFreightPickupDetail
     */
    public function setService(FedEx_PickupService_ServiceType $service)
    {
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Identifies the FedEx freight booking number. This element should contain numeric values only.
     *
     * @param string $BookingNumber
     * return FedEx_PickupService_ExpressFreightPickupDetail
     */
    public function setBookingNumber($bookingNumber)
    {
        $this->BookingNumber = $bookingNumber;
        return $this;
    }
    
    /**
     * Descriptive data detailing the length, width, and height of the freight package or shipment being picked up by FedEx.
     *
     * @param Dimensions $Dimensions
     * return FedEx_PickupService_ExpressFreightPickupDetail
     */
    public function setDimensions(FedEx_PickupService_Dimensions $dimensions)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Identifies the type of truck that is needed for FedEx to pick up the freight shipment. See TruckType for valid values.
     *
     * @param TruckType $TruckType
     * return FedEx_PickupService_ExpressFreightPickupDetail
     */
    public function setTruckType(FedEx_PickupService_TruckType $truckType)
    {
        $this->TruckType = $truckType;
        return $this;
    }
    
    /**
     * Identifies the tailer size needed for FedEx to pick up a freight shipment. See TrailerSizeType for valid values.
     *
     * @param TrailerSizeType $TrailerSize
     * return FedEx_PickupService_ExpressFreightPickupDetail
     */
    public function setTrailerSize(FedEx_PickupService_TrailerSizeType $trailerSize)
    {
        $this->TrailerSize = $trailerSize;
        return $this;
    }
    

    
}