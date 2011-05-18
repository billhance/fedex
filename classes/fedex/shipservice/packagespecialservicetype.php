<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the collection of special service offered by FedEx. BROKER_SELECT_OPTION should be used for Ground shipments only.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_PackageSpecialServiceType
    extends FedEx_AbstractSimpleType
{
    const _APPOINTMENT_DELIVERY = 'APPOINTMENT_DELIVERY';
    const _COD = 'COD';
    const _DANGEROUS_GOODS = 'DANGEROUS_GOODS';
    const _DRY_ICE = 'DRY_ICE';
    const _NON_STANDARD_CONTAINER = 'NON_STANDARD_CONTAINER';
    const _PRIORITY_ALERT = 'PRIORITY_ALERT';
    const _SIGNATURE_OPTION = 'SIGNATURE_OPTION';
}