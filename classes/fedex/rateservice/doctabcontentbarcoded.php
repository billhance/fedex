<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_DocTabContentBarcoded
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param BarcodeSymbologyType $Symbology
     * return FedEx_RateService_DocTabContentBarcoded
     */
    public function setSymbology(FedEx_RateService_BarcodeSymbologyType $symbology)
    {
        $this->Symbology = $symbology;
        return $this;
    }
    
    /**
     * 
     *
     * @param DocTabZoneSpecification $Specification
     * return FedEx_RateService_DocTabContentBarcoded
     */
    public function setSpecification(FedEx_RateService_DocTabZoneSpecification $specification)
    {
        $this->Specification = $specification;
        return $this;
    }
    

    
}