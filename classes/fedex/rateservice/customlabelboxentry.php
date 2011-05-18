<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Solid (filled) rectangular area on label.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CustomLabelBoxEntry
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomLabelPosition $TopLeftCorner
     * return FedEx_RateService_CustomLabelBoxEntry
     */
    public function setTopLeftCorner(FedEx_RateService_CustomLabelPosition $topLeftCorner)
    {
        $this->TopLeftCorner = $topLeftCorner;
        return $this;
    }
    
    /**
     * 
     *
     * @param CustomLabelPosition $BottomRightCorner
     * return FedEx_RateService_CustomLabelBoxEntry
     */
    public function setBottomRightCorner(FedEx_RateService_CustomLabelPosition $bottomRightCorner)
    {
        $this->BottomRightCorner = $bottomRightCorner;
        return $this;
    }
    

    
}