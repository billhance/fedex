<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data that governs data payload language/translations.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_TransactionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Free form text to be echoed back in the reply. Used to match requests and replies.
     *
     * @param string $CustomerTransactionId
     * return FedEx_PickupService_TransactionDetail
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
     * return FedEx_PickupService_TransactionDetail
     */
    public function setLocalization(FedEx_PickupService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}