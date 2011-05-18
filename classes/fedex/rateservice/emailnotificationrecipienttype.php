<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Identifies the set of valid email notification recipient types. For SHIPPER, RECIPIENT and BROKER the email address asssociated with their definitions will be used, any email address sent with the email notification for these three email notification recipient types will be ignored.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_EMailNotificationRecipientType
    extends FedEx_AbstractSimpleType
{
    const _BROKER = 'BROKER';
    const _OTHER = 'OTHER';
    const _RECIPIENT = 'RECIPIENT';
    const _SHIPPER = 'SHIPPER';
}