<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Image to be included from printer's memory, or from a local file for offline clients.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CustomLabelGraphicEntry
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomLabelPosition $Position
     * return FedEx_RateService_CustomLabelGraphicEntry
     */
    public function setPosition(FedEx_RateService_CustomLabelPosition $position)
    {
        $this->Position = $position;
        return $this;
    }
    
    /**
     * Printer-specific index of graphic image to be printed.
     *
     * @param string $PrinterGraphicId
     * return FedEx_RateService_CustomLabelGraphicEntry
     */
    public function setPrinterGraphicId($printerGraphicId)
    {
        $this->PrinterGraphicId = $printerGraphicId;
        return $this;
    }
    
    /**
     * Fully-qualified path and file name for graphic image to be printed.
     *
     * @param string $FileGraphicFullName
     * return FedEx_RateService_CustomLabelGraphicEntry
     */
    public function setFileGraphicFullName($fileGraphicFullName)
    {
        $this->FileGraphicFullName = $fileGraphicFullName;
        return $this;
    }
    

    
}