<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CustomerImageUsage
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomerImageUsageType $Type
     * return FedEx_RateService_CustomerImageUsage
     */
    public function setType(FedEx_RateService_CustomerImageUsageType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param ImageId $Id
     * return FedEx_RateService_CustomerImageUsage
     */
    public function setId(FedEx_RateService_ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    

    
}