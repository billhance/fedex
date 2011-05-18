<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_RateService extends FedEx
{
    /**
     * Rate Service
     * Version 9.0.0
     */
	protected $_WSDL = array(
		'wsdl' => 'RateService_v9.wsdl',
		'serviceId' => 'crs',
		'major' => '9',
		'intermediate' => '0',
		'minor' => '0',
		'location' => '/web-services/rate',
	);

   /**
     * Sends the RateRequest and returns the response
     *
     * @param ComplexType\RateRequest $rateRequest
     * @return stdClass
     */
    public function getRateReply(FedEx_RateService_RateRequest $rateRequest)
    {
		$rateRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$rateRequest->setClientDetail($this->_ClientDetail);
		$rateRequest->setVersion($this->_Version);
		$rateRequest->setReturnTransitAndCommit(true);

		return $this->_soapClient->getRates($rateRequest->toArray());
     }

    
}
