<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Customer-provided specifications for handling individual commodities.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_HazardousCommodityOptionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Specifies how the customer wishes the label text to be handled for this commodity in this package.
     *
     * @param HazardousCommodityLabelTextOptionType $LabelTextOption
     * return FedEx_ShipService_HazardousCommodityOptionDetail
     */
    public function setLabelTextOption(FedEx_ShipService_HazardousCommodityLabelTextOptionType $labelTextOption)
    {
        $this->LabelTextOption = $labelTextOption;
        return $this;
    }
    
    /**
     * Text used in labeling the commodity under control of the labelTextOption field.
     *
     * @param string $CustomerSuppliedLabelText
     * return FedEx_ShipService_HazardousCommodityOptionDetail
     */
    public function setCustomerSuppliedLabelText($customerSuppliedLabelText)
    {
        $this->CustomerSuppliedLabelText = $customerSuppliedLabelText;
        return $this;
    }
    

    
}