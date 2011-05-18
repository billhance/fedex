<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identification of a FedEx operating company (transportation).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PackageMovementInformationService_CarrierCodeType
    extends FedEx_AbstractSimpleType
{
    const _FDXE = 'FDXE';
    const _FDXG = 'FDXG';
}