<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_CloseService_ShippingDocumentNamingType
    extends FedEx_AbstractSimpleType
{
    const _FAST = 'FAST';
    const _LEGACY_FXRS = 'LEGACY_FXRS';
}