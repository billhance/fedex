<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_AstraLabelElement
    extends FedEx_AbstractComplexType
{

    /**
     * Position of Astra element
     *
     * @param int $Number
     * return FedEx_ShipService_AstraLabelElement
     */
    public function setNumber($number)
    {
        $this->Number = $number;
        return $this;
    }
    
    /**
     * Content corresponding to the Astra Element
     *
     * @param string $Content
     * return FedEx_ShipService_AstraLabelElement
     */
    public function setContent($content)
    {
        $this->Content = $content;
        return $this;
    }
    

    
}