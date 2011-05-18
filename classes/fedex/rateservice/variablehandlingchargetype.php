<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The type of handling charge to be calculated and returned in the reply.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_VariableHandlingChargeType
    extends FedEx_AbstractSimpleType
{
    const _FIXED_AMOUNT = 'FIXED_AMOUNT';
    const _PERCENTAGE_OF_NET_CHARGE = 'PERCENTAGE_OF_NET_CHARGE';
    const _PERCENTAGE_OF_NET_CHARGE_EXCLUDING_TAXES = 'PERCENTAGE_OF_NET_CHARGE_EXCLUDING_TAXES';
    const _PERCENTAGE_OF_NET_FREIGHT = 'PERCENTAGE_OF_NET_FREIGHT';
}