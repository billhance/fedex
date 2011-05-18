<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_AddressValidationService extends FedEx
{
    /**
     * Address Validation Service
     * Version 2.0.0
     */
	protected $_WSDL = array(
		'wsdl' => 'AddressValidationService_v2.wsdl',
		'serviceId' => 'aval',
		'major' => '2',
		'intermediate' => '0',
		'minor' => '0',
		'location' => '/web-services',
	);

    /**
     * Sends request and returns Address Validation Reply
     *
     * @param AddressValidationRequest $addresssValidationRequest
     * @return stdClass
     */
    public function getAddressValidationReply(FedEx_AddressValidationService_AddressValidationRequest $addressValidationRequest)
    {
		$addressValidationRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$addressValidationRequest->setClientDetail($this->_ClientDetail);
		$addressValidationRequest->setVersion($this->_Version);

        return $this->_soapClient->addressValidation($addressValidationRequest->toArray());
    }
    
}
