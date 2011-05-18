<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the type(s) of rates to be returned in the reply.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_RateRequestType
    extends FedEx_AbstractSimpleType
{
    const _ACCOUNT = 'ACCOUNT';
    const _LIST = 'LIST';
    const _PREFERRED = 'PREFERRED';
}