<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ReturnEMailDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $MerchantPhoneNumber
     * return FedEx_RateService_ReturnEMailDetail
     */
    public function setMerchantPhoneNumber($merchantPhoneNumber)
    {
        $this->MerchantPhoneNumber = $merchantPhoneNumber;
        return $this;
    }
    
    /**
     * Identifies the allowed (merchant-authorized) special services which may be selected when the subsequent shipment is created. Only services represented in EMailLabelAllowedSpecialServiceType will be controlled by this list.
     *
     * @param ReturnEMailAllowedSpecialServiceType $AllowedSpecialServices
     * return FedEx_RateService_ReturnEMailDetail
     */
    public function setAllowedSpecialServices(FedEx_RateService_ReturnEMailAllowedSpecialServiceType $allowedSpecialServices)
    {
        $this->AllowedSpecialServices = $allowedSpecialServices;
        return $this;
    }
    

    
}