<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the type of additional labels.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_AdditionalLabelsType
    extends FedEx_AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _CONSIGNEE = 'CONSIGNEE';
    const _CUSTOMS = 'CUSTOMS';
    const _DESTINATION = 'DESTINATION';
    const _MANIFEST = 'MANIFEST';
    const _ORIGIN = 'ORIGIN';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
}