<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Each instance of this data type represents a barcode whose content must be represented as binary data (i.e. not ASCII text).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_BinaryBarcode
    extends FedEx_AbstractComplexType
{

    /**
     * The kind of barcode data in this instance.
     *
     * @param BinaryBarcodeType $Type
     * return FedEx_ShipService_BinaryBarcode
     */
    public function setType(FedEx_ShipService_BinaryBarcodeType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * The data content of this instance.
     *
     * @param base64Binary $Value
     * return FedEx_ShipService_BinaryBarcode
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    

    
}