<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Constructed string, based on format and zero or more data fields, printed in specified printer font (for thermal labels) or generic font/size (for plain paper labels).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CustomLabelTextEntry
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomLabelPosition $Position
     * return FedEx_RateService_CustomLabelTextEntry
     */
    public function setPosition(FedEx_RateService_CustomLabelPosition $position)
    {
        $this->Position = $position;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Format
     * return FedEx_RateService_CustomLabelTextEntry
     */
    public function setFormat($format)
    {
        $this->Format = $format;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[string] $DataFields
     * return FedEx_RateService_CustomLabelTextEntry
     */
    public function setDataFields(array $dataFields)
    {
        $this->DataFields = $dataFields;
        return $this;
    }
    
    /**
     * Printer-specific font name for use with thermal printer labels.
     *
     * @param string $ThermalFontId
     * return FedEx_RateService_CustomLabelTextEntry
     */
    public function setThermalFontId($thermalFontId)
    {
        $this->ThermalFontId = $thermalFontId;
        return $this;
    }
    
    /**
     * Generic font name for use with plain paper labels.
     *
     * @param string $FontName
     * return FedEx_RateService_CustomLabelTextEntry
     */
    public function setFontName($fontName)
    {
        $this->FontName = $fontName;
        return $this;
    }
    
    /**
     * Generic font size for use with plain paper labels.
     *
     * @param positiveInteger $FontSize
     * return FedEx_RateService_CustomLabelTextEntry
     */
    public function setFontSize($fontSize)
    {
        $this->FontSize = $fontSize;
        return $this;
    }
    

    
}