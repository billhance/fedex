<?php defined('SYSPATH') or die('No direct script access.');

/**
 * This enumeration represents a kind of "legacy" account number from a FedEx operating entity.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_AssociatedAccountNumberType
    extends FedEx_AbstractSimpleType
{
    const _FEDEX_EXPRESS = 'FEDEX_EXPRESS';
    const _FEDEX_GROUND = 'FEDEX_GROUND';
    const _FEDEX_OFFICE = 'FEDEX_OFFICE';
}