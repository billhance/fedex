<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Represents a reference identifier printed on Freight bills of lading
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_PrintedReference
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param PrintedReferenceType $Type
     * return FedEx_ShipService_PrintedReference
     */
    public function setType(FedEx_ShipService_PrintedReferenceType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Value
     * return FedEx_ShipService_PrintedReference
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}