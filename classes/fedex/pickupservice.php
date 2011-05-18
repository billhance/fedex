<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PickupService extends FedEx
{
    /**
     * Pickup Service
     * Version 2.0.0
     */
	protected $_WSDL = array(
		'wsdl' => 'PickupService_v2.wsdl',
		'serviceId' => 'disp',
		'major' => '2',
		'intermediate' => '0',
		'minor' => '0',
		'location' => '/web-services',
	);

    /**
     * Sends request and returns Pickup Availability Reply
     *
     * @param PickupAvailabilityRequest $PickupAvailabilityRequest
     * @return stdClass
     */
    public function getPickupAvailabilityReply(FedEx_PickupService_PickupAvailabilityRequest $PickupAvailabilityRequest)
    {
		$PickupAvailabilityRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$PickupAvailabilityRequest->setClientDetail($this->_ClientDetail);
		$PickupAvailabilityRequest->setVersion($this->_Version);

        return $this->getSoapClient()->getPickupAvailability($PickupAvailabilityRequest->toArray());
    }
    
    /**
     * Sends request and returns Create Pickup Reply
     *
     * @param CreatePickupRequest $CreatePickupRequest
     * @return stdClass
     */
    public function createPickupReply(FedEx_PickupService_CreatePickupRequest $CreatePickupRequest)
    {
		$CreatePickupRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$CreatePickupRequest->setClientDetail($this->_ClientDetail);
		$CreatePickupRequest->setVersion($this->_Version);

        return $this->getSoapClient()->createPickup($CreatePickupRequest->toArray());
    }

    /**
     * Sends request and returns Cancel Pickup Reply
     *
     * @param CancelPickupRequest $CancelPickupRequest
     * @return stdClass
     */
    public function cancelPickup(FedEx_PickupService_CancelPickupRequest $CancelPickupRequest)
    {
		$CancelPickupRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$CancelPickupRequest->setClientDetail($this->_ClientDetail);
		$CancelPickupRequest->setVersion($this->_Version);

        return $this->getSoapClient()->cancelPickup($CancelPickupRequest->toArray());
    }

}
