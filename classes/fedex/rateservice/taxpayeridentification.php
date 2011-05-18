<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for taxpayer identification information.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_TaxpayerIdentification
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the category of the taxpayer identification number. See TinType for the list of values.
     *
     * @param TinType $TinType
     * return FedEx_RateService_TaxpayerIdentification
     */
    public function setTinType(FedEx_RateService_TinType $tinType)
    {
        $this->TinType = $tinType;
        return $this;
    }
    
    /**
     * Identifies the taxpayer identification number.
     *
     * @param string $Number
     * return FedEx_RateService_TaxpayerIdentification
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Identifies the usage of Tax Identification Number in Shipment processing
     *
     * @param string $Usage
     * return FedEx_RateService_TaxpayerIdentification
     */
    public function setUsage($usage)
    {
        $this->Usage = $usage;
        return $this;
    }
    

    
}