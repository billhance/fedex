<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The point where the delay is occurring ( e.g. Origin, Destination, Broker location).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_DelayPointType
    extends FedEx_AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _DESTINATION = 'DESTINATION';
    const _ORIGIN = 'ORIGIN';
    const _ORIGIN_DESTINATION_PAIR = 'ORIGIN_DESTINATION_PAIR';
    const _PROOF_OF_DELIVERY_POINT = 'PROOF_OF_DELIVERY_POINT';
}