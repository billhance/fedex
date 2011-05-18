<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the type of payment to be tendered for the pickup.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_FreightAccountPaymentType
    extends FedEx_AbstractSimpleType
{
    const _COLLECT = 'COLLECT';
    const _PREPAID = 'PREPAID';
}