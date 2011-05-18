<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the method of payment for a service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_PaymentType
    extends FedEx_AbstractSimpleType
{
    const _COLLECT = 'COLLECT';
    const _RECIPIENT = 'RECIPIENT';
    const _SENDER = 'SENDER';
    const _THIRD_PARTY = 'THIRD_PARTY';
}