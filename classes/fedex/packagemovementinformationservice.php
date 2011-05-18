<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_PackageMovementInformation extends FedEx
{
    /**
     * Package Movement Information Service
     * Version 4.0.0
     */
	protected $_WSDL = array(
		'wsdl' => 'PackageMovementInformationService_v4.wsdl',
		'serviceId' 	=> 'pmis',
		'major' => '4',
		'intermediate' => '0',
		'minor' => '0',
		'location' => '/web-services',
	);
		
    /**
     * Sends SOAP Request and returns Service Availability Reply
     *
     * @param ServiceAvailabilityRequest $serviceAvailabilityRequest
     * @return stdClass
     */
    public function getServiceAvailabilityReply(FedEx_PackageMovementInformation_ServiceAvailabilityRequest $serviceAvailabilityRequest)
    {
		$serviceAvailabilityRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$serviceAvailabilityRequest->setClientDetail($this->_ClientDetail);
		$serviceAvailabilityRequest->setVersion($this->_Version);

        return $this->_soapClient->serviceAvailability($serviceAvailabilityRequest->toArray());
    }

    /**
     * Sends SOAP Request and returns Postal Inquiry Reply
     *
     * @param PostalCodeInquiryRequest $postalCodeInquiryRequest
     * @return stdClass
     */
    public function getPostalCodeInquiryReply(FedEx_PackageMovementInformation_PostalCodeInquiryRequest $postalCodeInquiryRequest)
    {
		$postalCodeInquiryRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$postalCodeInquiryRequest->setClientDetail($this->_ClientDetail);
		$postalCodeInquiryRequest->setVersion($this->_Version);

        return $this->_soapClient->postalCodeInquiry($postalCodeInquiryRequest->toArray());
    }
}
