<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_CloseService_CloseDocumentType
    extends FedEx_AbstractSimpleType
{
    const _COD_REPORT = 'COD_REPORT';
    const _MANIFEST = 'MANIFEST';
    const _MULTIWEIGHT_REPORT = 'MULTIWEIGHT_REPORT';
    const _OP_950 = 'OP_950';
}