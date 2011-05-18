<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_AddressValidationService_NotificationParameter
    extends FedEx_AbstractComplexType
{

    /**
     * Name identifiying the type of the data in the element 'Value'
     *
     * @param string $Id
     * return FedEx_AddressValidationService_NotificationParameter
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * The value that was used as the replacement parameter.
     *
     * @param string $Value
     * return FedEx_AddressValidationService_NotificationParameter
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}