<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_LocatorService extends FedEx
{
    /**
     * Locator Service
     * Version 2.0.0
     */
	protected $_WSDL = array(
		'wsdl' => 'LocatorService_v2.wsdl',
		'serviceId' => 'dloc',
		'major' => '2',
		'intermediate' => '0',
		'minor' => '0',
		'location' => '/web-services',
	);
		
    /**
     * Sends request and returns FedEx Locator Reply
     *
     * @param FedExLocatorRequest $fedexLocatorRequest
     * @return stdClass
     */
    public function getFedExLocatorReply(FedEx_LocatorService_FedExLocatorRequest $fedexLocatorRequest)
    {
		$fedexLocatorRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$fedexLocatorRequest->setClientDetail($this->_ClientDetail);
		$fedexLocatorRequest->setVersion($this->_Version);

        return $this->_soapClient->fedExLocator($fedexLocatorRequest->toArray());
    }
    
}
