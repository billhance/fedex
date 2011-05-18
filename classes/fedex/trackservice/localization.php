<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data for the local language and locale (i.e. country).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_TrackService_Localization
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the language to use for human-readable messages.
     *
     * @param string $LanguageCode
     * return FedEx_TrackService_Localization
     */
    public function setLanguageCode($languageCode)
    {
        $this->LanguageCode = $languageCode;
        return $this;
    }
    
    /**
     * Identifies the locale (i.e.  country code).
     *
     * @param string $LocaleCode
     * return FedEx_TrackService_Localization
     */
    public function setLocaleCode($localeCode)
    {
        $this->LocaleCode = $localeCode;
        return $this;
    }
    

    
}