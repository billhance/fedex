<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the method of payment for a service.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_PaymentType
    extends FedEx_AbstractSimpleType
{
    const _SENDER = 'SENDER';
}