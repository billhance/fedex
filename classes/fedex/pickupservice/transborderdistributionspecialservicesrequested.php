<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies features of service within a Transborder Distribution shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_TransborderDistributionSpecialServicesRequested
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies features of service requested for the current Transborder Distribution shipment.
     *
     * @param array[TransborderDistributionSpecialServiceType] $SpecialServiceTypes
     * return FedEx_PickupService_TransborderDistributionSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes)
    {
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    
    /**
     * Specifies details for origin-country LTL services performed by FedEx.
     *
     * @param TransborderDistributionLtlDetail $TransborderDistributionLtlDetail
     * return FedEx_PickupService_TransborderDistributionSpecialServicesRequested
     */
    public function setTransborderDistributionLtlDetail(FedEx_PickupService_TransborderDistributionLtlDetail $transborderDistributionLtlDetail)
    {
        $this->TransborderDistributionLtlDetail = $transborderDistributionLtlDetail;
        return $this;
    }
    

    
}