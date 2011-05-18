<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data identifying the client submitting the transaction.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_LocatorService_ClientDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the FedEx account number assigned to the customer.
     *
     * @param string $AccountNumber
     * return FedEx_LocatorService_ClientDetail
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Identifies the unique client device submitting the request. 
     *
     * @param string $MeterNumber
     * return FedEx_LocatorService_ClientDetail
     */
    public function setMeterNumber($meterNumber)
    {
        $this->MeterNumber = $meterNumber;
        return $this;
    }
    
    /**
     * Governs any future language/translations used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast with TransactionDetail.localization, which governs data payload language/translation.)
     *
     * @param Localization $Localization
     * return FedEx_LocatorService_ClientDetail
     */
    public function setLocalization(FedEx_LocatorService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}