<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_AddressValidationService_DeliveryPointValidationType
    extends FedEx_AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _UNCONFIRMED = 'UNCONFIRMED';
    const _UNAVAILABLE = 'UNAVAILABLE';
}