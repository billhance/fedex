<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the type of brokerage to be applied to a shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_ClearanceBrokerageType
    extends FedEx_AbstractSimpleType
{
    const _BROKER_INCLUSIVE = 'BROKER_INCLUSIVE';
    const _BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER = 'BROKER_INCLUSIVE_NON_RESIDENT_IMPORTER';
    const _BROKER_SELECT = 'BROKER_SELECT';
    const _BROKER_SELECT_NON_RESIDENT_IMPORTER = 'BROKER_SELECT_NON_RESIDENT_IMPORTER';
    const _BROKER_UNASSIGNED = 'BROKER_UNASSIGNED';
}