<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Each instance of this data type represents a barcode whose content must be represented as ASCII text (i.e. not binary data).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_StringBarcode
    extends FedEx_AbstractComplexType
{

    /**
     * The kind of barcode data in this instance.
     *
     * @param StringBarcodeType $Type
     * return FedEx_ShipService_StringBarcode
     */
    public function setType(FedEx_ShipService_StringBarcodeType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The data content of this instance.
     *
     * @param string $Value
     * return FedEx_ShipService_StringBarcode
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}