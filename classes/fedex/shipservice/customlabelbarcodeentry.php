<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Constructed string, based on format and zero or more data fields, printed in specified barcode symbology.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CustomLabelBarcodeEntry
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomLabelPosition $Position
     * return FedEx_ShipService_CustomLabelBarcodeEntry
     */
    public function setPosition(FedEx_ShipService_CustomLabelPosition $position)
    {
        $this->Position = $position;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Format
     * return FedEx_ShipService_CustomLabelBarcodeEntry
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
     * return FedEx_ShipService_CustomLabelBarcodeEntry
     */
    public function setDataFields(array $dataFields)
    {
        $this->DataFields = $dataFields;
        return $this;
    }
    
    /**
     * 
     *
     * @param int $BarHeight
     * return FedEx_ShipService_CustomLabelBarcodeEntry
     */
    public function setBarHeight($barHeight)
    {
        $this->BarHeight = $barHeight;
        return $this;
    }
    
    /**
     * Width of thinnest bar/space element in the barcode.
     *
     * @param int $ThinBarWidth
     * return FedEx_ShipService_CustomLabelBarcodeEntry
     */
    public function setThinBarWidth($thinBarWidth)
    {
        $this->ThinBarWidth = $thinBarWidth;
        return $this;
    }
    
    /**
     * 
     *
     * @param BarcodeSymbologyType $BarcodeSymbology
     * return FedEx_ShipService_CustomLabelBarcodeEntry
     */
    public function setBarcodeSymbology(FedEx_ShipService_BarcodeSymbologyType $barcodeSymbology)
    {
        $this->BarcodeSymbology = $barcodeSymbology;
        return $this;
    }
    

    
}