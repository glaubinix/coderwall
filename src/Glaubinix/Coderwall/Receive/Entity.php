<?php

namespace Glaubinix\Coderwall\Receive;

abstract class Entity {

	public function __construct($input = null) {
		$input = $this->setObjectEntities($input);

		foreach ($input as $property => $value) {
			$this->{$property} = $value;
		}
	}

	protected function setObjectEntities($input) {
		return $input;
	}

}
