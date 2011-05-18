<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The type of International shipment.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_InternationalDocumentContentType
    extends FedEx_AbstractSimpleType
{
    const _DOCUMENTS_ONLY = 'DOCUMENTS_ONLY';
    const _NON_DOCUMENTS = 'NON_DOCUMENTS';
}