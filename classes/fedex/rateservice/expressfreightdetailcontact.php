<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Currently not supported. Delivery contact information for an Express freight shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ExpressFreightDetailContact
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $Name
     * return FedEx_RateService_ExpressFreightDetailContact
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Phone
     * return FedEx_RateService_ExpressFreightDetailContact
     */
    public function setPhone($phone)
    {
        $this->Phone = $phone;
        return $this;
    }
    

    
}