<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the type of funds FedEx should collect upon shipment delivery.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_CodCollectionType
    extends FedEx_AbstractSimpleType
{
    const _ANY = 'ANY';
    const _CASH = 'CASH';
    const _GUARANTEED_FUNDS = 'GUARANTEED_FUNDS';
}