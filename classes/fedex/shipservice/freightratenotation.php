<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Additional non-monetary data returned with Freight rates.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_FreightRateNotation
    extends FedEx_AbstractComplexType
{

    /**
     * Unique identifier for notation.
     *
     * @param string $Code
     * return FedEx_ShipService_FreightRateNotation
     */
    public function setCode($code)
    {
        $this->Code = $code;
        return $this;
    }
    
    /**
     * Human-readable explanation of notation.
     *
     * @param string $Description
     * return FedEx_ShipService_FreightRateNotation
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}