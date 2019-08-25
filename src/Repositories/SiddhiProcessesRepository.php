<?php namespace Maclof\Kubernetes\Repositories;

use Maclof\Kubernetes\Collections\ServiceCollection;

class SiddhiProcessesRepository extends Repository
{
	protected $uri = 'siddhiprocesses';

	protected function createCollection($response)
	{
		return new ServiceCollection($response['items']);
	}
}
