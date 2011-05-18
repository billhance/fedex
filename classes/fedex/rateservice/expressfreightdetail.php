<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Details specific to an Express freight shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ExpressFreightDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Indicates whether or nor a packing list is enclosed.
     *
     * @param boolean $PackingListEnclosed
     * return FedEx_RateService_ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed)
    {
        $this->PackingListEnclosed = $packingListEnclosed;
        return $this;
    }
    
    /**
     * 
                Total shipment pieces.
                ie. 3 boxes and 3 pallets of 100 pieces each = Shippers Load and Count of 303.
                Applicable to International Priority Freight and International Economy Freight.
                Values must be in the range of 1 - 99999
              
     *
     * @param positiveInteger $ShippersLoadAndCount
     * return FedEx_RateService_ExpressFreightDetail
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
     * return FedEx_RateService_ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber)
    {
        $this->BookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param boolean $ReferenceLabelRequested
     * return FedEx_RateService_ExpressFreightDetail
     */
    public function setReferenceLabelRequested($referenceLabelRequested)
    {
        $this->ReferenceLabelRequested = $referenceLabelRequested;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param ExpressFreightDetailContact $BeforeDeliveryContact
     * return FedEx_RateService_ExpressFreightDetail
     */
    public function setBeforeDeliveryContact(FedEx_RateService_ExpressFreightDetailContact $beforeDeliveryContact)
    {
        $this->BeforeDeliveryContact = $beforeDeliveryContact;
        return $this;
    }
    
    /**
     * Currently not supported.
     *
     * @param ExpressFreightDetailContact $UndeliverableContact
     * return FedEx_RateService_ExpressFreightDetail
     */
    public function setUndeliverableContact(FedEx_RateService_ExpressFreightDetailContact $undeliverableContact)
    {
        $this->UndeliverableContact = $undeliverableContact;
        return $this;
    }
    

    
}