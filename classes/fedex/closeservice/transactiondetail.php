<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_TransactionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $CustomerTransactionId
     * return FedEx_CloseService_TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->CustomerTransactionId = $customerTransactionId;
        return $this;
    }
    
    /**
     * Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @param Localization $Localization
     * return FedEx_CloseService_TransactionDetail
     */
    public function setLocalization(FedEx_CloseService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}