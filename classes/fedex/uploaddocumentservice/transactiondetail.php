<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_TransactionDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies a customer-supplied unique identifier for this transaction. It is returned in the reply message to aid in matching requests to replies.
     *
     * @param string $CustomerTransactionId
     * return FedEx_UploadDocumentService_TransactionDetail
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
     * return FedEx_UploadDocumentService_TransactionDetail
     */
    public function setLocalization(FedEx_UploadDocumentService_Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}