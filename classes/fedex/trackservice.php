<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
class FedEx_TrackService extends FedEx
{
    /**
     * Track Service
     * Version 4.0.0
     */
	protected $_WSDL = array(
		'wsdl' => 'TrackService_v4.wsdl',
		'serviceId' => 'trck',
		'major' => '4',
		'intermediate' => '0',
		'minor' => '0',
		'location' => '/web-services/track',
	);

    /**
     * Sends request and returns Track Reply
     *
     * @param TrackRequest $trackRequest
     * @return stdClass
     */
    public function getTrackReply(FedEx_TrackService_TrackRequest $trackRequest)
    {
		$trackRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$trackRequest->setClientDetail($this->_ClientDetail);
		$trackRequest->setVersion($this->_Version);

        return $this->_soapClient->track($trackRequest->toArray());
    }

    /**
     * Sends request and returns Track Notification Reply
     *
     * @param TrackNotificationRequest $trackNotificationRequest
     * @return stdClass
     */
    public function getTrackNotificationReply(FedEx_TrackService_TrackNotificationRequest $trackNotificationRequest)
    {
		$trackNotificationRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$trackNotificationRequest->setClientDetail($this->_ClientDetail);
		$trackNotificationRequest->setVersion($this->_Version);

        return $this->_soapClient->getTrackNotification($trackNotificationRequest->toArray());
    }

    /**
     * Sends request and returns Signature Proof Of Delivery Fax Reply
     *
     * @param SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest
     * @return stdClass
     */
    public function getSignatureProofOfDeliveryFaxReply(FedEx_TrackService_SignatureProofOfDeliveryFaxRequest $signatureProofOfDeliveryFaxRequest)
    {
		$signatureProofOfDeliveryFaxRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$signatureProofOfDeliveryFaxRequest->setClientDetail($this->_ClientDetail);
		$signatureProofOfDeliveryFaxRequest->setVersion($this->_Version);

        return $this->_soapClient->sendSignatureProofOfDeliveryFax($signatureProofOfDeliveryFaxRequest->toArray());
    }

    /**
     * Sends request and returns Signature Proof Of Delivery Letter Request
     *
     * @param SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest
     * @return stdClass
     */
    public function getSignatureProofOfDeliveryLetterReply(FedEx_TrackService_SignatureProofOfDeliveryLetterRequest $signatureProofOfDeliveryLetterRequest)
    {
		$signatureProofOfDeliveryLetterRequest->setWebAuthenticationDetail($this->_WebAuthenticationDetail);
		$signatureProofOfDeliveryLetterRequest->setClientDetail($this->_ClientDetail);
		$signatureProofOfDeliveryLetterRequest->setVersion($this->_Version);

        return $this->_soapClient->retrieveSignatureProofOfDeliveryLetter($signatureProofOfDeliveryLetterRequest->toArray());
    }

}
