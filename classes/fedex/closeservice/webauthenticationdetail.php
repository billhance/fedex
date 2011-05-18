<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_WebAuthenticationDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Credential used to authenticate a specific software application. This value is provided by FedEx after registration.
     *
     * @param WebAuthenticationCredential $UserCredential
     * return FedEx_CloseService_WebAuthenticationDetail
     */
    public function setUserCredential(FedEx_CloseService_WebAuthenticationCredential $userCredential)
    {
        $this->UserCredential = $userCredential;
        return $this;
    }
    

    
}