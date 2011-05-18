<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data regarding the version/level of a service operation performed by the callee (in each reply).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ReturnTagService_VersionId
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies a system or sub-system which performs an operation.
     *
     * @param string $ServiceId
     * return FedEx_ReturnTagService_VersionId
     */
    public function setServiceId($serviceId)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    
    /**
     * Identifies the service business level.
     *
     * @param int $Major
     * return FedEx_ReturnTagService_VersionId
     */
    public function setMajor($major)
    {
        $this->Major = $major;
        return $this;
    }
    
    /**
     * Identifies the service interface level.
     *
     * @param int $Intermediate
     * return FedEx_ReturnTagService_VersionId
     */
    public function setIntermediate($intermediate)
    {
        $this->Intermediate = $intermediate;
        return $this;
    }
    
    /**
     * Identifies the service code level.
     *
     * @param int $Minor
     * return FedEx_ReturnTagService_VersionId
     */
    public function setMinor($minor)
    {
        $this->Minor = $minor;
        return $this;
    }
    

    
}