<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Currently not supported.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_PriorityAlertDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param array[string] $Content
     * return FedEx_RateService_PriorityAlertDetail
     */
    public function setContent(array $content)
    {
        $this->Content = $content;
        return $this;
    }
    

    
}