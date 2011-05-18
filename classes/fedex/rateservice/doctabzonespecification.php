<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_DocTabZoneSpecification
    extends FedEx_AbstractComplexType
{

    /**
     * Zone number can be between 1 and 12.
     *
     * @param positiveInteger $ZoneNumber
     * return FedEx_RateService_DocTabZoneSpecification
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    
    /**
     * Header value on this zone.
     *
     * @param string $Header
     * return FedEx_RateService_DocTabZoneSpecification
     */
    public function setHeader($header)
    {
        $this->Header = $header;
        return $this;
    }
    
    /**
     * Reference path to the element in the request/reply whose value should be printed on this zone.
     *
     * @param string $DataField
     * return FedEx_RateService_DocTabZoneSpecification
     */
    public function setDataField($dataField)
    {
        $this->DataField = $dataField;
        return $this;
    }
    
    /**
     * Free form-text to be printed in this zone.
     *
     * @param string $LiteralValue
     * return FedEx_RateService_DocTabZoneSpecification
     */
    public function setLiteralValue($literalValue)
    {
        $this->LiteralValue = $literalValue;
        return $this;
    }
    
    /**
     * Justification for the text printed on this zone.
     *
     * @param DocTabZoneJustificationType $Justification
     * return FedEx_RateService_DocTabZoneSpecification
     */
    public function setJustification(FedEx_RateService_DocTabZoneJustificationType $justification)
    {
        $this->Justification = $justification;
        return $this;
    }
    

    
}