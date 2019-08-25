<?php namespace Maclof\Kubernetes\Collections;

use Maclof\Kubernetes\Models\SiddhiProcesses;

class SiddhiProcessesCollection extends Collection
{
	/**
	 * The constructor.
	 *
	 * @param array $items
	 */
	public function __construct(array $items)
	{
		parent::__construct($this->getServices($items));
	}

	/**
	 * Get an array of services.
	 *
	 * @param  array $items
	 * @return array
	 */
	protected function getServices(array $items)
	{
		foreach ($items as &$item) {
			if ($item instanceof Service) {
				continue;
			}

			$item = new SiddhiProcesses($item);
		}

		return $items;
	}
}
