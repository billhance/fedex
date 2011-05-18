<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies responsibilities with respect to loss, damage, etc.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_FreightOnValueType
    extends FedEx_AbstractSimpleType
{
    const _CARRIER_RISK = 'CARRIER_RISK';
    const _OWN_RISK = 'OWN_RISK';
}