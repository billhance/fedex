<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies how to return a shipping document to the caller.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_ShippingDocumentDispositionType
    extends FedEx_AbstractSimpleType
{
    const _CONFIRMED = 'CONFIRMED';
    const _DEFERRED_RETURNED = 'DEFERRED_RETURNED';
    const _DEFERRED_STORED = 'DEFERRED_STORED';
    const _EMAILED = 'EMAILED';
    const _QUEUED = 'QUEUED';
    const _RETURNED = 'RETURNED';
    const _STORED = 'STORED';
}