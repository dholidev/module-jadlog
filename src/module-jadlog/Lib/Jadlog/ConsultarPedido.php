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

class ConsultarPedido {

	public $CodCliente = null;

	public $Password = null;

	public $NDs = null;

	public function __construct($CodCliente, $Password, $NDs) {
		$this->CodCliente = $CodCliente;
		$this->Password = $Password;
		$this->NDs = $NDs;
	}

}
