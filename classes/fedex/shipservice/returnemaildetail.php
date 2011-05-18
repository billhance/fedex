<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Return Email Details
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_ReturnEMailDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Phone number of the merchant
     *
     * @param string $MerchantPhoneNumber
     * return FedEx_ShipService_ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->MerchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    
    /**
     * Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @param array[ReturnEMailAllowedSpecialServiceType] $AllowedSpecialServices
     * return FedEx_ShipService_ReturnEMailDetail
     */
    public function setAllowedSpecialServices(array $allowedSpecialServices)
    {
        $this->AllowedSpecialServices = $allowedSpecialServices;
        return $this;
    }
    

    
}