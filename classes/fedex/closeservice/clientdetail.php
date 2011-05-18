<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data for the client submitting a transaction.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_ClientDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $AccountNumber
     * return FedEx_CloseService_ClientDetail
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * 
     *
     * @param string $MeterNumber
     * return FedEx_CloseService_ClientDetail
     */
    public function setMeterNumber($meterNumber)
    {
        $this->MeterNumber = $meterNumber;
        return $this;
    }
    
    /**
     * Only used in transactions which require identification of the Fed Ex Office integrator.
     *
     * @param string $IntegratorId
     * return FedEx_CloseService_ClientDetail
     */
    public function setIntegratorId($integratorId)
    {
        $this->IntegratorId = $integratorId;
        return $this;
    }
    
    /**
     * The language to be used for human-readable Notification.localizedMessages in responses to the request containing this ClientDetail object. Different requests from the same client may contain different Localization data. (Contrast with TransactionDetail.localization, which governs data payload language/translation.)
     *
     * @param Localization $Localization
     * return FedEx_CloseService_ClientDetail
     */
    public function setLocalization(FedEx_CloseService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}