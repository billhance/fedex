<?php defined('SYSPATH') or die('No direct script access.');

return array
(
	Kohana::PRODUCTION => array(
		'USD' => array
		(
			'key' => NULL,
			'password' => NULL,

			'shipAccount' => NULL,
			'meterNumber' => NULL,
			'billAccount' => NULL,
			'dutyAccount' => NULL,

			'location' => 'https://ws.fedex.com:443',
		),
		'CAD' => array
		(
			'key' => NULL,
			'password' => NULL,

			'shipAccount' => NULL,
			'meterNumber' => NULL,
			'billAccount' => NULL,
			'dutyAccount' => NULL,

			'location' => 'https://ws.fedex.com:443',
		),
	),
	Kohana::DEVELOPMENT => array(
		'USD' => array
		(
			'key' => NULL,
			'password' => NULL,

			'shipAccount' => NULL,
			'meterNumber' => NULL,
			'billAccount' => NULL,
			'dutyAccount' => NULL,

			'location' => 'https://wsbeta.fedex.com:443',
		),
		'CAD' => array
		(
			'key' => NULL,
			'password' => NULL,

			'shipAccount' => NULL,
			'meterNumber' => NULL,
			'billAccount' => NULL,
			'dutyAccount' => NULL,

			'location' => 'https://wsbeta.fedex.com:443',
		),
	),
);
