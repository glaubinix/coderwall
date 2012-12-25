<?php

namespace Glaubinix\Coderwall\Service;

use Glaubinix\Coderwall\Receive\Coder;
use Glaubinix\Coderwall\Receive\TeamMember;

class CoderService extends AbstractService {

	/**
	 * @param string $name
	 * @return Coder
	 */
	public function getByName($name) {
		$raw_data = $this->connection->get($name)->getResponse();

		return $this->createCoder($raw_data);
	}

	/**
	 * @param TeamMember $team_member
	 * @return Coder
	 */
	public function getByTeamMember(TeamMember $team_member) {
		return $this->getByName($team_member->username);
	}

	/**
	 * @param array $raw_data
	 * @return Coder
	 */
	protected function createCoder(array $raw_data) {
		return new Coder($raw_data);
	}
}
