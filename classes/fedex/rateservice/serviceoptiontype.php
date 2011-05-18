<?php defined('SYSPATH') or die('No direct script access.');

/**
 * These values control the optional features of service that may be combined in a commitment/rate comparision transaction.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_ServiceOptionType
    extends FedEx_AbstractSimpleType
{
    const _FREIGHT_GUARANTEE = 'FREIGHT_GUARANTEE';
    const _SATURDAY_DELIVERY = 'SATURDAY_DELIVERY';
    const _SMART_POST_ALLOWED_INDICIA = 'SMART_POST_ALLOWED_INDICIA';
    const _SMART_POST_HUB_ID = 'SMART_POST_HUB_ID';
}