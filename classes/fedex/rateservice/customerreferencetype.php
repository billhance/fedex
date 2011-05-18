<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_CustomerReferenceType
    extends FedEx_AbstractSimpleType
{
    const _BILL_OF_LADING = 'BILL_OF_LADING';
    const _CUSTOMER_REFERENCE = 'CUSTOMER_REFERENCE';
    const _DEPARTMENT_NUMBER = 'DEPARTMENT_NUMBER';
    const _ELECTRONIC_PRODUCT_CODE = 'ELECTRONIC_PRODUCT_CODE';
    const _INTRACOUNTRY_REGULATORY_REFERENCE = 'INTRACOUNTRY_REGULATORY_REFERENCE';
    const _INVOICE_NUMBER = 'INVOICE_NUMBER';
    const _P_O_NUMBER = 'P_O_NUMBER';
    const _SHIPMENT_INTEGRITY = 'SHIPMENT_INTEGRITY';
    const _STORE_NUMBER = 'STORE_NUMBER';
}