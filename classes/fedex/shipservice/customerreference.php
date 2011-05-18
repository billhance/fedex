<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Reference information to be associated with this package.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CustomerReference
    extends FedEx_AbstractComplexType
{

    /**
     * The reference type to be associated with this reference data.
     *
     * @param CustomerReferenceType $CustomerReferenceType
     * return FedEx_ShipService_CustomerReference
     */
    public function setCustomerReferenceType(FedEx_ShipService_CustomerReferenceType $customerReferenceType)
    {
        $this->CustomerReferenceType = $customerReferenceType;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Value
     * return FedEx_ShipService_CustomerReference
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}