<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This element is currently not supported and is for the future use.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_NaftaProducer
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $Id
     * return FedEx_ShipService_NaftaProducer
     */
    public function setId($id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * 
     *
     * @param Party $Producer
     * return FedEx_ShipService_NaftaProducer
     */
    public function setProducer(FedEx_ShipService_Party $producer)
    {
        $this->Producer = $producer;
        return $this;
    }
    

    
}