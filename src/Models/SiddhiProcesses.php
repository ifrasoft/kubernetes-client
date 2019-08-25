<?php namespace Maclof\Kubernetes\Models;

class SiddhiProcesses extends Model
{
	/**
	 * The api version.
	 *
	 * @var string
	 */
	protected $apiVersion = 'siddhi.io/v1alpha1';

 
	protected $schema = ['kind' => 'SiddhiProcess'];
}
