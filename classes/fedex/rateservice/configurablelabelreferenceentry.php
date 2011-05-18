<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ConfigurableLabelReferenceEntry
    extends FedEx_AbstractComplexType
{

    /**
     * 1 of 12 possible zones to  position data.
     *
     * @param positiveInteger $ZoneNumber
     * return FedEx_RateService_ConfigurableLabelReferenceEntry
     */
    public function setZoneNumber($zoneNumber)
    {
        $this->ZoneNumber = $zoneNumber;
        return $this;
    }
    
    /**
     * The identifiying text for the data in this zone.
     *
     * @param string $Header
     * return FedEx_RateService_ConfigurableLabelReferenceEntry
     */
    public function setHeader($header)
    {
        $this->Header = $header;
        return $this;
    }
    
    /**
     * A reference to a field in either the request or reply to print in this zone following the header.
     *
     * @param string $DataField
     * return FedEx_RateService_ConfigurableLabelReferenceEntry
     */
    public function setDataField($dataField)
    {
        $this->DataField = $dataField;
        return $this;
    }
    
    /**
     * A literal value to print after the header in this zone.
     *
     * @param string $LiteralValue
     * return FedEx_RateService_ConfigurableLabelReferenceEntry
     */
    public function setLiteralValue($literalValue)
    {
        $this->LiteralValue = $literalValue;
        return $this;
    }
    

    
}