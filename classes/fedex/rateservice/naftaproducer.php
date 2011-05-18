<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_NaftaProducer
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $Id
     * return FedEx_RateService_NaftaProducer
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
     * return FedEx_RateService_NaftaProducer
     */
    public function setProducer(FedEx_RateService_Party $producer)
    {
        $this->Producer = $producer;
        return $this;
    }
    

    
}