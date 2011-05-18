<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackReconciliation
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $Status
     * return FedEx_TrackService_TrackReconciliation
     */
    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $Description
     * return FedEx_TrackService_TrackReconciliation
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}