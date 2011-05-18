<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_RequestedShippingDocumentType
    extends FedEx_AbstractSimpleType
{
    const _CERTIFICATE_OF_ORIGIN = 'CERTIFICATE_OF_ORIGIN';
    const _COMMERCIAL_INVOICE = 'COMMERCIAL_INVOICE';
    const _CUSTOMER_SPECIFIED_LABELS = 'CUSTOMER_SPECIFIED_LABELS';
    const _GENERAL_AGENCY_AGREEMENT = 'GENERAL_AGENCY_AGREEMENT';
    const _LABEL = 'LABEL';
    const _NAFTA_CERTIFICATE_OF_ORIGIN = 'NAFTA_CERTIFICATE_OF_ORIGIN';
    const _PRO_FORMA_INVOICE = 'PRO_FORMA_INVOICE';
    const _RETURN_INSTRUCTIONS = 'RETURN_INSTRUCTIONS';
}