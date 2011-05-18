<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_NotificationParameter
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the type of data contained in Value (e.g. SERVICE_TYPE, PACKAGE_SEQUENCE, etc..).
     *
     * @param string $Id
     * return FedEx_ShipService_NotificationParameter
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * The value of the parameter (e.g. PRIORITY_OVERNIGHT, 2, etc..).
     *
     * @param string $Value
     * return FedEx_ShipService_NotificationParameter
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}