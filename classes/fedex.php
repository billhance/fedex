<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Request sends the SOAP call to the FedEx servers and returns the response
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
 */
abstract class FedEx
{
	/**
	 * @var  string  default instance name
	 */
	public static $default = 'default';

	/**
	 * @var  array  FedEx instances
	 */
	public static $instances = array();

	/**
	 * Get a singleton FedEx_Service_Request instance.
	 *
	 *     // Load the rate service database
	 *     $rate = FedEx_RateService_Request::instance('USD');
	 *     $ship = FedEx_ShipService_Request::instance('CAD');
	 *
	 * @param   string  currency (USD, CAD, etc.)
	 * @return  FedEx_<service>
	 */
	public static function instance($currency)
	{
		$service = get_called_class();

		if ( ! isset(FedEx::$instances[$service]) )
		{
			// Load default configuration
			$configs = Kohana::config('fedex');
			if ( ! array_key_exists(FedEx::$default, $configs))
			{
				throw new Kohana_Exception('FedEx configuration for :environment is missing',
					array(':environment' => FedEx::$default));
			}
			if ( ! array_key_exists($currency, $configs[FedEx::$default]))
			{
				throw new Kohana_Exception('FedEx configuration for :currency is missing',
					array(':currency' => $currency));
			}
			$config = $configs[FedEx::$default][$currency];

			// Create a new FedEx Service instance with the environment's configuration
			FedEx::$instances[$service] = new $service($config);
		}

		return FedEx::$instances[$service];
	}

	/**
     * FedEx <Service> WebAuthenticationDetail object
     *
     * @var Fedex_<service>_WebAuthenticationDetail
     */
	protected $_WebAuthenticationDetail;

	/**
     * FedEx <Service> ClientDetail object
     *
     * @var Fedex_<service>_ClientDetail
     */
	protected $_ClientDetail;

	/**
     * FedEx <Service> TransactionDetail object
     *
     * @var Fedex_<service>_TransactionDetail
     */
	protected $_TransactionDetail;

	/**
     * FedEx <Service> Version object
     *
     * @var Fedex_<service>_Version
     */
	protected $_Version;

	/**
     * FedEx shipAccount value
     *
     * @bool
     */
	protected $_shipAccount;

	/**
     * FedEx meterNumber value
     *
     * @bool
     */
	protected $_meterNumber;

	/**
     * FedEx billAccount value
     *
     * @bool
     */
	protected $_billAccount;

	/**
     * FedEx dutyAccount value
     *
     * @bool
     */
	protected $_dutyAccount;

	/**
	 * Returns a singleton instance of one of the FedEx classes.
	 *
	 * @param   array  config
	 * @return  object
	 */
	protected function __construct($config)
	{
		$service = get_called_class();

		// Load SOAP Client
		$this->loadSOAP($config['location'] . $this->_WSDL['location']);

		// Initialize FedEx accounts
		$this->_shipAccount = $config['shipAccount'];
		$this->_meterNumber = $config['meterNumber'];
		$this->_billAccount = $config['billAccount'];
		$this->_dutyAccount = $config['dutyAccount'];

        //Initialize WebAuthenticationDetail object
		$class_name = $service.'_WebAuthenticationCredential';
		$userCredential = new $class_name();
		$userCredential
			->setKey($config['key'])
			->setPassword($config['password']);

		$class_name = $service.'_WebAuthenticationDetail';
		$this->_WebAuthenticationDetail = new $class_name();
		$this->_WebAuthenticationDetail->setUserCredential($userCredential);

		//Initialize ClientDetail object
		$class_name = $service.'_ClientDetail';
		$this->_ClientDetail = new $class_name();
		$this->_ClientDetail
			->setAccountNumber($config['shipAccount'])
			->setMeterNumber($config['meterNumber']);

		//Initialize Version object
		$class_name = $service.'_VersionId';
		$this->_Version = new $class_name();
		$this->_Version
			->setServiceId($this->_WSDL['serviceId'])
			->setMajor($this->_WSDL['major'])
			->setIntermediate($this->_WSDL['intermediate'])
			->setMinor($this->_WSDL['minor']);
    }
    
	/**
	 * Sets the shipAccount for the request.
	 *
	 * @param   string  account
	 */
    public function setShipAccount($account)
    {
 		$this->_shipAccount = $account;   
    }

	/**
	 * Gets the shipAccount for the request.
	 *
	 * @return  string  account
	 */
    public function getShipAccount()
    {
 		return $this->_shipAccount;   
    }
    
	/**
	 * Sets the meterNumber for the request.
	 *
	 * @param   string  account
	 */
    public function setMeterNumber($account)
    {
 		$this->_meterNumber = $account;   
    }
    
	/**
	 * Gets the meterNumber for the request.
	 *
	 * @return  string  account
	 */
    public function getMeterNumber()
    {
 		return $this->_meterNumber;
    }
    
	/**
	 * Sets the billAccount for the request.
	 *
	 * @param   string  account
	 */
    public function setBillAccount($account)
    {
 		$this->_billAccount = $account;   
    }
    
	/**
	 * Gets the billAccount for the request.
	 *
	 * @return  string  account
	 */
    public function getBillAccount()
    {
 		return $this->_billAccount;
    }
    
	/**
	 * Sets the dutyAccount for the request.
	 *
	 * @param   string  account
	 */
    public function setDutyAccount($account)
    {
 		$this->_dutyAccount = $account;   
    }
    
	/**
	 * Gets the dutyAccount for the request.
	 *
	 * @return  string  account
	 */
    public function getDutyAccount()
    {
 		return $this->_dutyAccount;
    }

	/**
     * FedEx <Service> WSDL array
     *
     * @bool
     */
	protected $_WSDL;

	/**
	 * Initializes the Soap Client.
	 *
	 * @param   string  FedEX WSDL service->port->s1:address location
	 */
    private function loadSOAP($location)
    {
        $wsdl = realpath(str_replace('classes', 'wsdl', dirname(__FILE__)) . DIRECTORY_SEPARATOR . $this->_WSDL['wsdl']);
		$soap_options = array();
		$soap_options['trace'] = true;
		if (FedEx::$default > Kohana::PRODUCTION) $soap_options['cache_wsdl'] = WSDL_CACHE_NONE;
		$this->_soapClient = new SoapClient($wsdl, $soap_options);
		$this->_soapClient->__setLocation($location);
    }
     
}
