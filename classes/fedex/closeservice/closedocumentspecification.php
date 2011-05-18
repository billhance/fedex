<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Contains all data required for close-time documents to be produced in conjunction with a specific set of shipments. For January 2010, there are no applicable options for the COD report, the Manifest, or the Multiweight Report (they will only be available in TEXT format). Detail specifications will be added for those report types when customer-selectable options are implemented.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_CloseDocumentSpecification
    extends FedEx_AbstractComplexType
{

    /**
     * Indicates the types of close documents requested by the caller.
     *
     * @param array[CloseDocumentType] $CloseDocumentTypes
     * return FedEx_CloseService_CloseDocumentSpecification
     */
    public function setCloseDocumentTypes(array $closeDocumentTypes)
    {
        $this->CloseDocumentTypes = $closeDocumentTypes;
        return $this;
    }
    
    /**
     * Specifies the production of the OP-950 document for hazardous materials.
     *
     * @param Op950Detail $Op950Detail
     * return FedEx_CloseService_CloseDocumentSpecification
     */
    public function setOp950Detail(FedEx_CloseService_Op950Detail $op950Detail)
    {
        $this->Op950Detail = $op950Detail;
        return $this;
    }
    

    
}