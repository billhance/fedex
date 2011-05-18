<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_InternationalControlledExportDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param InternationalControlledExportType $Type
     * return FedEx_PickupService_InternationalControlledExportDetail
     */
    public function setType(FedEx_PickupService_InternationalControlledExportType $type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $ForeignTradeZoneCode
     * return FedEx_PickupService_InternationalControlledExportDetail
     */
    public function setForeignTradeZoneCode($foreignTradeZoneCode)
    {
        $this->ForeignTradeZoneCode = $foreignTradeZoneCode;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $EntryNumber
     * return FedEx_PickupService_InternationalControlledExportDetail
     */
    public function setEntryNumber($entryNumber)
    {
        $this->EntryNumber = $entryNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $LicenseOrPermitNumber
     * return FedEx_PickupService_InternationalControlledExportDetail
     */
    public function setLicenseOrPermitNumber($licenseOrPermitNumber)
    {
        $this->LicenseOrPermitNumber = $licenseOrPermitNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param date $LicenseOrPermitExpirationDate
     * return FedEx_PickupService_InternationalControlledExportDetail
     */
    public function setLicenseOrPermitExpirationDate($licenseOrPermitExpirationDate)
    {
        $this->LicenseOrPermitExpirationDate = $licenseOrPermitExpirationDate;
        return $this;
    }
    

    
}