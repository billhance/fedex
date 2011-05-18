<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService_UploadDocumentProducerType
    extends FedEx_AbstractSimpleType
{
    const _CUSTOMER = 'CUSTOMER';
    const _FEDEX_CAFE = 'FEDEX_CAFE';
    const _FEDEX_CLS = 'FEDEX_CLS';
    const _FEDEX_FIDT = 'FEDEX_FIDT';
    const _FEDEX_FXRS = 'FEDEX_FXRS';
    const _FEDEX_GTM = 'FEDEX_GTM';
    const _OTHER = 'OTHER';
}