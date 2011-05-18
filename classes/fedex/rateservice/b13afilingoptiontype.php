<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
            Specifies which filing option is being exercised by the customer.
            Required for non-document shipments originating in Canada destined for any country other than Canada, the United States, Puerto Rico or the U.S. Virgin Islands.
          
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_B13AFilingOptionType
    extends FedEx_AbstractSimpleType
{
    const _FILED_ELECTRONICALLY = 'FILED_ELECTRONICALLY';
    const _MANUALLY_ATTACHED = 'MANUALLY_ATTACHED';
    const _NOT_REQUIRED = 'NOT_REQUIRED';
    const _SUMMARY_REPORTING = 'SUMMARY_REPORTING';
}