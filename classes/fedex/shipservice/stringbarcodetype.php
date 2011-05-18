<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ShipService_StringBarcodeType
    extends FedEx_AbstractSimpleType
{
    const _ADDRESS = 'ADDRESS';
    const _ASTRA = 'ASTRA';
    const _FDX_1D = 'FDX_1D';
    const _GROUND = 'GROUND';
    const _POSTAL = 'POSTAL';
    const _USPS = 'USPS';
}