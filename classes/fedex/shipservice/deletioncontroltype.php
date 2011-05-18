<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies the type of deletion to be performed on a shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_DeletionControlType
    extends FedEx_AbstractSimpleType
{
    const _DELETE_ALL_PACKAGES = 'DELETE_ALL_PACKAGES';
    const _DELETE_ONE_PACKAGE = 'DELETE_ONE_PACKAGE';
    const _LEGACY = 'LEGACY';
}