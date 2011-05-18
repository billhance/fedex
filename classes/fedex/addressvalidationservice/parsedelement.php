<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_ParsedElement
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $Name
     * return FedEx_AddressValidationService_ParsedElement
     */
    public function setName($name)
    {
        $this->Name = $name;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Value
     * return FedEx_AddressValidationService_ParsedElement
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[AddressValidationChangeType] $Changes
     * return FedEx_AddressValidationService_ParsedElement
     */
    public function setChanges(array $changes)
    {
        $this->Changes = $changes;
        return $this;
    }
    

    
}