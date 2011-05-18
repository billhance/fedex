<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService_RequestedPackageDetailType
    extends FedEx_AbstractSimpleType
{
    const _INDIVIDUAL_PACKAGES = 'INDIVIDUAL_PACKAGES';
    const _PACKAGE_GROUPS = 'PACKAGE_GROUPS';
    const _PACKAGE_SUMMARY = 'PACKAGE_SUMMARY';
}