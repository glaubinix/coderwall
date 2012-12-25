<?php

namespace Glaubinix\Coderwall\Service;

use Glaubinix\Coderwall\Receive\Team;
use Glaubinix\Coderwall\Receive\Coder;

class TeamService extends AbstractService {

	const API_URL = 'team/';

	/**
	 * @param string $name
	 * @return Team
	 */
	public function getByName($name) {
		$raw_data = $this->connection->get(self::API_URL . $name)->getResponse();

		return $this->createTeam($raw_data);
	}

	/**
	 * @param Coder $coder
	 * @return Team
	 */
	public function getByCoder(Coder $coder) {
		// need to map the team id to an url
		//return $this->getByName($coder->team);
	}

	/**
	 * @return array<Team>
	 */
	public function getLeaderBoard() {
		$raw_data = $this->connection->get('leaderboard')->getResponse();

		$teams = array();
		foreach ($raw_data as $raw) {
			array_push($teams, $this->createTeam($raw));
		}

		return $teams;
	}

	/**
	 * @param array $raw_data
	 * @return Team
	 */
	protected function createTeam(array $raw_data) {
		return new Team($raw_data);
	}

}
