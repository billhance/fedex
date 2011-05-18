<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
							
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PackageMovementInformationService_VersionId
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies a system or sub-system which performs an operation. Customers using the FedEx Web Services interface should set this element to "pmis".
     *
     * @param string $ServiceId
     * return FedEx_PackageMovementInformationService_VersionId
     */
    public function setServiceId($serviceId)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    
    /**
     * Identifies the service business level. This value should be set to 4.
     *
     * @param int $Major
     * return FedEx_PackageMovementInformationService_VersionId
     */
    public function setMajor($major)
    {
        $this->Major = $major;
        return $this;
    }
    
    /**
     * Identifies the service interface level. This value should be set to 0.
     *
     * @param int $Intermediate
     * return FedEx_PackageMovementInformationService_VersionId
     */
    public function setIntermediate($intermediate)
    {
        $this->Intermediate = $intermediate;
        return $this;
    }
    
    /**
     * Identifies the service code level. This value should be set to 0.
     *
     * @param int $Minor
     * return FedEx_PackageMovementInformationService_VersionId
     */
    public function setMinor($minor)
    {
        $this->Minor = $minor;
        return $this;
    }
    

    
}