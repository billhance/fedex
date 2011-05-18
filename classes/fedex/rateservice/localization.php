<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the representation of human-readable text.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_Localization
    extends FedEx_AbstractComplexType
{

    /**
     * Two-letter code for language (e.g. EN, FR, etc.)
     *
     * @param string $LanguageCode
     * return FedEx_RateService_Localization
     */
    public function setLanguageCode($languageCode)
    {
        $this->LanguageCode = $languageCode;
        return $this;
    }
    
    /**
     * Two-letter code for the region (e.g. us, ca, etc..).
     *
     * @param string $LocaleCode
     * return FedEx_RateService_Localization
     */
    public function setLocaleCode($localeCode)
    {
        $this->LocaleCode = $localeCode;
        return $this;
    }
    

    
}