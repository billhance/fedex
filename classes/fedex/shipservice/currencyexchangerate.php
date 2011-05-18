<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Currency exchange rate information.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_CurrencyExchangeRate
    extends FedEx_AbstractComplexType
{

    /**
     * The currency code for the original (converted FROM) currency.
     *
     * @param string $FromCurrency
     * return FedEx_ShipService_CurrencyExchangeRate
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->FromCurrency = $fromCurrency;
        return $this;
    }
    
    /**
     * The currency code for the final (converted INTO) currency.
     *
     * @param string $IntoCurrency
     * return FedEx_ShipService_CurrencyExchangeRate
     */
    public function setIntoCurrency($intoCurrency)
    {
        $this->IntoCurrency = $intoCurrency;
        return $this;
    }
    
    /**
     * Multiplier used to convert fromCurrency units to intoCurrency units.
     *
     * @param decimal $Rate
     * return FedEx_ShipService_CurrencyExchangeRate
     */
    public function setRate($rate)
    {
        $this->Rate = $rate;
        return $this;
    }
    

    
}