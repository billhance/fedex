<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Allows customer-specified control of label content.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_CustomerSpecifiedLabelDetail
    extends FedEx_AbstractComplexType
{

    /**
     * If omitted, no doc tab will be produced (i.e. default = former NONE type).
     *
     * @param DocTabContent $DocTabContent
     * return FedEx_RateService_CustomerSpecifiedLabelDetail
     */
    public function setDocTabContent(FedEx_RateService_DocTabContent $docTabContent)
    {
        $this->DocTabContent = $docTabContent;
        return $this;
    }
    
    /**
     * Defines any custom content to print on the label.
     *
     * @param CustomLabelDetail $CustomContent
     * return FedEx_RateService_CustomerSpecifiedLabelDetail
     */
    public function setCustomContent(FedEx_RateService_CustomLabelDetail $customContent)
    {
        $this->CustomContent = $customContent;
        return $this;
    }
    
    /**
     * Defines additional data to print in the Configurable portion of the label, this allows you to print the same type information on the label that can also be printed on the doc tab.
     *
     * @param array[ConfigurableLabelReferenceEntry] $ConfigurableReferenceEntries
     * return FedEx_RateService_CustomerSpecifiedLabelDetail
     */
    public function setConfigurableReferenceEntries(array $configurableReferenceEntries)
    {
        $this->ConfigurableReferenceEntries = $configurableReferenceEntries;
        return $this;
    }
    
    /**
     * Controls which data/sections will be suppressed.
     *
     * @param array[LabelMaskableDataType] $MaskedData
     * return FedEx_RateService_CustomerSpecifiedLabelDetail
     */
    public function setMaskedData(array $maskedData)
    {
        $this->MaskedData = $maskedData;
        return $this;
    }
    
    /**
     * The language to use when printing the terms and conditions on the label.
     *
     * @param Localization $TermsAndConditionsLocalization
     * return FedEx_RateService_CustomerSpecifiedLabelDetail
     */
    public function setTermsAndConditionsLocalization(FedEx_RateService_Localization $termsAndConditionsLocalization)
    {
        $this->TermsAndConditionsLocalization = $termsAndConditionsLocalization;
        return $this;
    }
    
    /**
     * Controls the number of additional copies of supplemental labels.
     *
     * @param array[AdditionalLabelsDetail] $AdditionalLabels
     * return FedEx_RateService_CustomerSpecifiedLabelDetail
     */
    public function setAdditionalLabels(array $additionalLabels)
    {
        $this->AdditionalLabels = $additionalLabels;
        return $this;
    }
    
    /**
     * This value reduces the default quantity of destination/consignee air waybill labels. A value of zero indicates no change to default. A minimum of one copy will always be produced.
     *
     * @param nonNegativeInteger $AirWaybillSuppressionCount
     * return FedEx_RateService_CustomerSpecifiedLabelDetail
     */
    public function setAirWaybillSuppressionCount($airWaybillSuppressionCount)
    {
        $this->AirWaybillSuppressionCount = $airWaybillSuppressionCount;
        return $this;
    }
    

    
}