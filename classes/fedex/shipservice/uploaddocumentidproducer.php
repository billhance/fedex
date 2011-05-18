<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_UploadDocumentIdProducer
    extends FedEx_AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _FEDEX_CSHP = 'FEDEX_CSHP';
    const _FEDEX_GTM = 'FEDEX_GTM';
}