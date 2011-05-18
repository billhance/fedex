<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Reference information to be associated with this package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CustomerReference
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomerReferenceType $CustomerReferenceType
     * return FedEx_RateService_CustomerReference
     */
    public function setCustomerReferenceType(FedEx_RateService_CustomerReferenceType $customerReferenceType)
    {
        $this->CustomerReferenceType = $customerReferenceType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Value
     * return FedEx_RateService_CustomerReference
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}