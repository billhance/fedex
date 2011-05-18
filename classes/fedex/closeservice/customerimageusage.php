<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_CustomerImageUsage
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param CustomerImageUsageType $Type
     * return FedEx_CloseService_CustomerImageUsage
     */
    public function setType(FedEx_CloseService_CustomerImageUsageType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param ImageId $Id
     * return FedEx_CloseService_CustomerImageUsage
     */
    public function setId(FedEx_CloseService_ImageId $id)
    {
        $this->Id = $id;
        return $this;
    }
    
    /**
     * Internal Id used by INET to identify customer provided images during documents generation. Ex COO etc ...
     *
     * @param string $InternalId
     * return FedEx_CloseService_CustomerImageUsage
     */
    public function setInternalId($internalId)
    {
        $this->InternalId = $internalId;
        return $this;
    }
    
    /**
     * Internal image type used by INET to identify customer provided images during documents generation. Ex COO etc ..
     *
     * @param InternalImageType $InternalImageType
     * return FedEx_CloseService_CustomerImageUsage
     */
    public function setInternalImageType(FedEx_CloseService_InternalImageType $internalImageType)
    {
        $this->InternalImageType = $internalImageType;
        return $this;
    }
    

    
}