<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Details specific to an Express freight shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ExpressFreightDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Indicates whether or nor a packing list is enclosed.
     *
     * @param boolean $PackingListEnclosed
     * return FedEx_ShipService_ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed)
    {
        $this->PackingListEnclosed = $packingListEnclosed;
        return $this;
    }
    
    /**
     * 
                Total shipment pieces.
                e.g. 3 boxes and 3 pallets of 100 pieces each = Shippers Load and Count of 303.
                Applicable to International Priority Freight and International Economy Freight.
                Values must be in the range of 1 - 99999
              
     *
     * @param positiveInteger $ShippersLoadAndCount
     * return FedEx_ShipService_ExpressFreightDetail
     */
    public function setShippersLoadAndCount($shippersLoadAndCount)
    {
        $this->ShippersLoadAndCount = $shippersLoadAndCount;
        return $this;
    }
    
    /**
     * Required for International Freight shipping. Values must be 8- 12 characters in length.
     *
     * @param string $BookingConfirmationNumber
     * return FedEx_ShipService_ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber)
    {
        $this->BookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    

    
}