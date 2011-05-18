<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data required to produce a General Agency Agreement document. Remaining content (business data) to be defined once requirements have been completed.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_GeneralAgencyAgreementDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param ShippingDocumentFormat $Format
     * return FedEx_RateService_GeneralAgencyAgreementDetail
     */
    public function setFormat(FedEx_RateService_ShippingDocumentFormat $format)
    {
        $this->Format = $format;
        return $this;
    }
    

    
}