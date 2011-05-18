<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Two part authentication string used for the sender's identity
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_ShipService_WebAuthenticationCredential
    extends FedEx_AbstractComplexType
{

    /**
     * Identifying part of authentication credential. This value is provided by FedEx after registration
     *
     * @param string $Key
     * return FedEx_ShipService_WebAuthenticationCredential
     */
    public function setKey($key)
    {
        $this->Key = $key;
        return $this;
    }
    
    /**
     * Secret part of authentication key. This value is provided by FedEx after registration.
     *
     * @param string $Password
     * return FedEx_ShipService_WebAuthenticationCredential
     */
    public function setPassword($password)
    {
        $this->Password = $password;
        return $this;
    }
    

    
}