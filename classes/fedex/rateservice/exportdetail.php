<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Country specific details of an International shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_ExportDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
                Specifies which filing option is being exercised by the customer.
                Required for non-document shipments originating in Canada destined for any country other than Canada, the United States, Puerto Rico or the U.S. Virgin Islands.
              
     *
     * @param B13AFilingOptionType $B13AFilingOption
     * return FedEx_RateService_ExportDetail
     */
    public function setB13AFilingOption(FedEx_RateService_B13AFilingOptionType $b13AFilingOption)
    {
        $this->B13AFilingOption = $b13AFilingOption;
        return $this;
    }
    
    /**
     * 
                Required only if B13AFilingOption is one of the following:
                FILED_ELECTRONICALLY
                MANUALLY_ATTACHED
                SUMMARY_REPORTING
                If B13AFilingOption = NOT_REQUIRED, this field should contain a valid B13A Exception Number.
              
     *
     * @param string $ExportComplianceStatement
     * return FedEx_RateService_ExportDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    
    /**
     * This field is applicable only to Canada export non-document shipments of any value to any destination. No special characters allowed. 
     *
     * @param string $PermitNumber
     * return FedEx_RateService_ExportDetail
     */
    public function setPermitNumber($permitNumber)
    {
        $this->PermitNumber = $permitNumber;
        return $this;
    }
    
    /**
     * Department of Commerce/Department of State information about this shipment.
     *
     * @param DestinationControlDetail $DestinationControlDetail
     * return FedEx_RateService_ExportDetail
     */
    public function setDestinationControlDetail(FedEx_RateService_DestinationControlDetail $destinationControlDetail)
    {
        $this->DestinationControlDetail = $destinationControlDetail;
        return $this;
    }
    

    
}