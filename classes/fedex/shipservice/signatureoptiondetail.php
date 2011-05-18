<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data required for FedEx delivery signature services.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_SignatureOptionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the delivery signature services option selected by the customer for this shipment. See OptionType for the list of valid values.
     *
     * @param SignatureOptionType $OptionType
     * return FedEx_ShipService_SignatureOptionDetail
     */
    public function setOptionType(FedEx_ShipService_SignatureOptionType $optionType)
    {
        $this->OptionType = $optionType;
        return $this;
    }
    
    /**
     * Identifies the delivery signature release authorization number.
     *
     * @param string $SignatureReleaseNumber
     * return FedEx_ShipService_SignatureOptionDetail
     */
    public function setSignatureReleaseNumber($signatureReleaseNumber)
    {
        $this->SignatureReleaseNumber = $signatureReleaseNumber;
        return $this;
    }
    

    
}