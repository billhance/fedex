<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the type of service scheduling offered from a Freight or National Freight Service Center to a customer-supplied address.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_FreightServiceSchedulingType
    extends FedEx_AbstractSimpleType
{
    const _LIMITED = 'LIMITED';
    const _STANDARD = 'STANDARD';
    const _WILL_CALL = 'WILL_CALL';
}