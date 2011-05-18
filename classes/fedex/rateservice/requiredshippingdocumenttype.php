<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_RequiredShippingDocumentType
    extends FedEx_AbstractSimpleType
{
    const _CANADIAN_B13A = 'CANADIAN_B13A';
    const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const _INTERNATIONAL_AIRWAY_BILL = 'INTERNATIONAL_AIRWAY_BILL';
    const _MAIL_SERVICE_AIRWAY_BILL = 'MAIL_SERVICE_AIRWAY_BILL';
    const _SHIPPERS_EXPORT_DECLARATION = 'SHIPPERS_EXPORT_DECLARATION';
}