<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Idenitifies the particular package to be tracked and how it is referenced.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_TrackPackageIdentifier
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies the value to be tracked (e.g., tracking number or reference value).
     *
     * @param string $Value
     * return FedEx_TrackService_TrackPackageIdentifier
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Specifies the type of track value that is specified in the previous Value element.
     *
     * @param TrackIdentifierType $Type
     * return FedEx_TrackService_TrackPackageIdentifier
     */
    public function setType(FedEx_TrackService_TrackIdentifierType $type)
    {
        $this->Type = $type;
        return $this;
    }
    

    
}