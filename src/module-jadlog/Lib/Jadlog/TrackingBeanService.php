<?php
/**
* 
* Frete com Jadlog para Magento 2
* 
* @category     Dholi
* @package      Modulo Frete com Jadlog
* @copyright    Copyright (c) 2020 dholi (https://www.dholi.dev)
* @version      1.0.0
* @license      https://opensource.org/licenses/OSL-3.0
* @license      https://opensource.org/licenses/AFL-3.0
*
*/
declare(strict_types=1);

namespace Dholi\Jadlog\Lib\Jadlog;

class TrackingBeanService extends \SoapClient {

	private static $classmap = array(
		'consultar' => '\Dholi\Jadlog\Lib\Jadlog\Consultar',
		'consultarResponse' => '\Dholi\Jadlog\Lib\Jadlog\ConsultarResponse',
		'consultarPedido' => '\Dholi\Jadlog\Lib\Jadlog\ConsultarPedido',
		'consultarPedidoResponse' => '\Dholi\Jadlog\Lib\Jadlog\ConsultarPedidoResponse');

	public function __construct(array $options = array(), $wsdl = 'http://www.jadlog.com.br:8080/JadlogEdiWs/services/TrackingBean?wsdl') {
		foreach (self::$classmap as $key => $value) {
			if (!isset($options['classmap'][$key])) {
				$options['classmap'][$key] = $value;
			}
		}

		parent::__construct($wsdl, $options);
	}

	public function consultar(\Dholi\Jadlog\Lib\Jadlog\Consultar $parameters) {
		return $this->__soapCall('consultar', array($parameters));
	}

	public function consultarPedido(\Dholi\Jadlog\Lib\Jadlog\ConsultarPedido $parameters) {
		return $this->__soapCall('consultarPedido', array($parameters));
	}

}