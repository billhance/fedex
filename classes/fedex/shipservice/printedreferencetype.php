<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies a particular reference identifier printed on a Freight bill of lading.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_PrintedReferenceType
    extends FedEx_AbstractSimpleType
{
    const _CONSIGNEE_ID_NUMBER = 'CONSIGNEE_ID_NUMBER';
    const _SHIPPER_ID_NUMBER = 'SHIPPER_ID_NUMBER';
}