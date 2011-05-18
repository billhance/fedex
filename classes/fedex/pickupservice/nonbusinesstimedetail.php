<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specification for services performed during non-business hours and/or days.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PickupService_NonBusinessTimeDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Total number of person days for full non-business days.
     *
     * @param nonNegativeInteger $PersonDays
     * return FedEx_PickupService_NonBusinessTimeDetail
     */
    public function setPersonDays($personDays)
    {
        $this->PersonDays = $personDays;
        return $this;
    }
    
    /**
     * Total number of person hours (whole or partial hours) for non-business hours.
     *
     * @param nonNegativeInteger $PersonHours
     * return FedEx_PickupService_NonBusinessTimeDetail
     */
    public function setPersonHours($personHours)
    {
        $this->PersonHours = $personHours;
        return $this;
    }
    

    
}