<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data that governs data payload language/translations.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ReturnTagService_TransactionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies a customer-supplied unique identifier for this transaction. It is returned in the reply message to aid in matching requests to replies.
     *
     * @param string $CustomerTransactionId
     * return FedEx_ReturnTagService_TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->CustomerTransactionId = $customerTransactionId;
        return $this;
    }
    
    /**
     * Governs any future language/translations applied to the data payload (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @param Localization $Localization
     * return FedEx_ReturnTagService_TransactionDetail
     */
    public function setLocalization(FedEx_ReturnTagService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}