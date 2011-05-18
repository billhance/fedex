<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CustomLabelDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomLabelCoordinateUnits $CoordinateUnits
     * return FedEx_ShipService_CustomLabelDetail
     */
    public function setCoordinateUnits(FedEx_ShipService_CustomLabelCoordinateUnits $coordinateUnits)
    {
        $this->CoordinateUnits = $coordinateUnits;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomLabelTextEntry] $TextEntries
     * return FedEx_ShipService_CustomLabelDetail
     */
    public function setTextEntries(array $textEntries)
    {
        $this->TextEntries = $textEntries;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomLabelGraphicEntry] $GraphicEntries
     * return FedEx_ShipService_CustomLabelDetail
     */
    public function setGraphicEntries(array $graphicEntries)
    {
        $this->GraphicEntries = $graphicEntries;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomLabelBoxEntry] $BoxEntries
     * return FedEx_ShipService_CustomLabelDetail
     */
    public function setBoxEntries(array $boxEntries)
    {
        $this->BoxEntries = $boxEntries;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[CustomLabelBarcodeEntry] $BarcodeEntries
     * return FedEx_ShipService_CustomLabelDetail
     */
    public function setBarcodeEntries(array $barcodeEntries)
    {
        $this->BarcodeEntries = $barcodeEntries;
        return $this;
    }
    

    
}