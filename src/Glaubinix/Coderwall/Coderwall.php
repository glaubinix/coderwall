<?

namespace Glaubinix\Coderwall;

class Coderwall {

	public function getCoder($username) {
		"{$username}.json"
	}

	public function getTeam($team) {
		"teams/{$team}.json"
	}

	public function getTeamById($team_id) {
		return $this->getTeam($team_id);
	}

	public function getTeamByName($team_name) {
		return $this->getTeam($team_name);
	}

	public function getLeaderBoard() {
		"leaderboard.json"
	}

	public function getProTip($public_id) {
		"p/{$public_id.json"
	}

}
