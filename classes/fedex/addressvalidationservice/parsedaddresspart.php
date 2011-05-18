<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_ParsedAddressPart
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param array[ParsedElement] $Elements
     * return FedEx_AddressValidationService_ParsedAddressPart
     */
    public function setElements(array $elements)
    {
        $this->Elements = $elements;
        return $this;
    }
    

    
}