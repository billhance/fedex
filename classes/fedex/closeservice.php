<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_CloseService extends FedEx
{
    /**
     * Close Service
     * Version 2.1.0
     */
	protected $_WSDL = array(
		'wsdl' => 'CloseService_v2.wsdl',
		'serviceId' => 'clos',
		'major' => '2',
		'intermediate' => '1',
		'minor' => '0',
		'location' => '/web-services/close',
	);

    /**
     * Sends request and returns Smart Post Close Reply
     * 
     * @param SmartPostCloseRequest $smartPostCloseRequest
     * @return stdClass
     */
    public function getSmartPostCloseReply(FedEx_CloseService_SmartPostCloseRequest $smartPostCloseRequest)
    {
		$smartPostCloseRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$smartPostCloseRequest->setClientDetail($this->_ClientDetail);
		$smartPostCloseRequest->setVersion($this->_Version);

        return $this->getSoapClient()->smartPostClose($smartPostCloseRequest->toArray());
    }

    /**
     * Sends request and returns Ground Close Reply
     *
     * @param GroundCloseRequest $groundCloseRequest
     * @return stdClass
     */
    public function getGroundCloseReply(FedEx_CloseService_GroundCloseRequest $groundCloseRequest)
    {
		$groundCloseRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$groundCloseRequest->setClientDetail($this->_ClientDetail);
		$groundCloseRequest->setVersion($this->_Version);

        return $this->getSoapClient()->groundClose($groundCloseRequest->toArray());
    }

    /**
     * Sends request and returns Ground Close Reports Reprint Reply
     *
     * @param GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest
     * @return stdClass
     */
    public function getGroundCloseReportsReprintReply(FedEx_CloseService_GroundCloseReportsReprintRequest $groundCloseReportsReprintRequest)
    {
		$groundCloseReportsReprintRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$groundCloseReportsReprintRequest->setClientDetail($this->_ClientDetail);
		$groundCloseReportsReprintRequest->setVersion($this->_Version);

        return $this->getSoapClient()->groundCloseReportsReprint($groundCloseReportsReprintRequest->toArray());
    }

    /**
     * Sends request and returns Ground Close Documents Reply
     * 
     * @param GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest
     * @return stdClass
     */
    public function getGroundCloseDocumentsReply(FedEx_CloseService_GroundCloseWithDocumentsRequest $groundCloseWithDocumentsRequest)
    {
		$groundCloseWithDocumentsRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$groundCloseWithDocumentsRequest->setClientDetail($this->_ClientDetail);
		$groundCloseWithDocumentsRequest->setVersion($this->_Version);

        return $this->getSoapClient()->groundCloseWithDocuments($groundCloseWithDocumentsRequest->toArray());
    }

    /**
     * Sends request and returns Reprint Ground Close Documents Reply
     *
     * @param ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest
     * @return stdClass
     */
    public function getReprintGroundCloseDocumentsReply(FedEx_CloseService_ReprintGroundCloseDocumentsRequest $reprintGroundCloseDocumentsRequest)
    {
		$reprintGroundCloseDocumentsRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$reprintGroundCloseDocumentsRequest->setClientDetail($this->_ClientDetail);
		$reprintGroundCloseDocumentsRequest->setVersion($this->_Version);

        return $this->getSoapClient()->reprintGroundCloseDocuments($reprintGroundCloseDocumentsRequest->toArray());
    }

    
}
