<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Describes relationship between origin and destination countries.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_CountryRelationshipType
    extends FedEx_AbstractSimpleType
{
    const _DOMESTIC = 'DOMESTIC';
    const _INTERNATIONAL = 'INTERNATIONAL';
}