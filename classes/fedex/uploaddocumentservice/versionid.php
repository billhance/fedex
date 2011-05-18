<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_VersionId
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies a system or sub-system which performs an operation.
     *
     * @param string $ServiceId
     * return FedEx_UploadDocumentService_VersionId
     */
    public function setServiceId($serviceId)
    {
        $this->ServiceId = $serviceId;
        return $this;
    }
    
    /**
     * Identifies the service business level. For this release this value should be set to 2.
     *
     * @param int $Major
     * return FedEx_UploadDocumentService_VersionId
     */
    public function setMajor($major)
    {
        $this->Major = $major;
        return $this;
    }
    
    /**
     * Identifies the service interface level. For this release this value should be set to 0.
     *
     * @param int $Intermediate
     * return FedEx_UploadDocumentService_VersionId
     */
    public function setIntermediate($intermediate)
    {
        $this->Intermediate = $intermediate;
        return $this;
    }
    
    /**
     * Identifies the service code level. For this release this value should be set to 0.
     *
     * @param int $Minor
     * return FedEx_UploadDocumentService_VersionId
     */
    public function setMinor($minor)
    {
        $this->Minor = $minor;
        return $this;
    }
    

    
}