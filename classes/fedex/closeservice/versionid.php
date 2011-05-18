<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_VersionId
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $ServiceId
     * return FedEx_CloseService_VersionId
     */
    public function setServiceId($serviceId)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    
    /**
     * Service business level.
     *
     * @param int $Major
     * return FedEx_CloseService_VersionId
     */
    public function setMajor($major)
    {
        $this->Major = $major;
        return $this;
    }
    
    /**
     * Service interface level.
     *
     * @param int $Intermediate
     * return FedEx_CloseService_VersionId
     */
    public function setIntermediate($intermediate)
    {
        $this->Intermediate = $intermediate;
        return $this;
    }
    
    /**
     * Service code level.
     *
     * @param int $Minor
     * return FedEx_CloseService_VersionId
     */
    public function setMinor($minor)
    {
        $this->Minor = $minor;
        return $this;
    }
    

    
}