<?php

namespace Glaubinix\Coderwall\Service;

use Glaubinix\Coderwall\Client\Connection;

class AbstractService {

	/**
	 * @var Connection
	 */
	protected $connection;

	/**
	 * @param Connection $connection
	 */
	public function __construct(Connection $connection) {
		$this->connection = $connection;
	}

}
