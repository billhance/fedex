<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CustomerImageUsage
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomerImageUsageType $Type
     * return FedEx_ShipService_CustomerImageUsage
     */
    public function setType(FedEx_ShipService_CustomerImageUsageType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param ImageId $Id
     * return FedEx_ShipService_CustomerImageUsage
     */
    public function setId(FedEx_ShipService_ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    

    
}