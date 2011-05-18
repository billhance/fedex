<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Governs any future language/translations used for human-readable text.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_Localization
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the language to use for human-readable messages.
     *
     * @param string $LanguageCode
     * return FedEx_UploadDocumentService_Localization
     */
    public function setLanguageCode($languageCode)
    {
        $this->LanguageCode = $languageCode;
        return $this;
    }
    
    /**
     * Identifies the locale (i.e. country code) associated with the language.
     *
     * @param string $LocaleCode
     * return FedEx_UploadDocumentService_Localization
     */
    public function setLocaleCode($localeCode)
    {
        $this->LocaleCode = $localeCode;
        return $this;
    }
    

    
}