<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the types of Estimated Duties and Taxes to be included in a rate quotation for an international shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_EdtRequestType
    extends FedEx_AbstractSimpleType
{
    const _ALL = 'ALL';
    const _NONE = 'NONE';
}