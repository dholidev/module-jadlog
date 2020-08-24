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

namespace Dholi\Jadlog\Block\Adminhtml\Config\Source;

use Dholi\Jadlog\Model\Carrier;

class Servicos implements \Magento\Framework\Option\ArrayInterface {

	private $carrier;

	public function __construct(Carrier $carrier) {
		$this->carrier = $carrier;
	}

	/**
	 * {@inheritdoc}
	 */
	public function toOptionArray() {
		$options = [];
		foreach ($this->carrier->getCode('service') as $k => $v) {
			$options[] = ['value' => $k, 'label' => $v];
		}

		return $options;
	}
}