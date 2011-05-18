<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the packaging used by the requestor for the package. See PackagingType for list of valid enumerated values.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_PackagingType
    extends FedEx_AbstractSimpleType
{
    const _FEDEX_10KG_BOX = 'FEDEX_10KG_BOX';
    const _FEDEX_25KG_BOX = 'FEDEX_25KG_BOX';
    const _FEDEX_BOX = 'FEDEX_BOX';
    const _FEDEX_ENVELOPE = 'FEDEX_ENVELOPE';
    const _FEDEX_PAK = 'FEDEX_PAK';
    const _FEDEX_TUBE = 'FEDEX_TUBE';
    const _YOUR_PACKAGING = 'YOUR_PACKAGING';
}