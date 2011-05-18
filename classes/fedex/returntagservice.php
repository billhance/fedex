<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_ReturnTagService extends FedEx
{
    /**
     * Return Tag Service
     * Version 1.1.0
     */
	protected $_WSDL = array(
		'wsdl' => 'ReturnTagService_v1.wsdl',
		'serviceId' => 'wsi',
		'major' => '1',
		'intermediate' => '1',
		'minor' => '0',
		'location' => '/web-services',
	);

    /**
     * Sends request and returns Express Tag Availability Reply
     *
     * @param ExpressTagAvailabilityRequest $ExpressTagAvailabilityRequest
     * @return stdClass
     */
    public function getExpressTagAvailabilityReply(FedEx_ReturnTagService_ExpressTagAvailabilityRequest $ExpressTagAvailabilityRequest)
    {
		$ExpressTagAvailabilityRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$ExpressTagAvailabilityRequest->setClientDetail($this->_ClientDetail);
		$ExpressTagAvailabilityRequest->setVersion($this->_Version);

        return $this->getSoapClient()->getExpressTagAvailability($ExpressTagAvailabilityRequest->toArray());
    }

}
