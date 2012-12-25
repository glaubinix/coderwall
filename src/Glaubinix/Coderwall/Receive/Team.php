<?

namespace Glaubinix\Coderwall\Receive;

class Team extends Entity {

	/**
	 * @var string
	 */
	public $id;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var integer
	 */
	public $rank;

	/**
	 * @var integer
	 */
	public $size;

	/**
	 * @var string
	 */
	public $slug;

	/**
	 * @var string
	 */
	public $about;

	/**
	 * @var string
	 */
	public $avatar;

	/**
	 * @var array<Team>
	 */
	public $neighbors;

	/**
	 * @var array<TeamMember>
	 */
	public $team_members;

	protected function setObjectEntities($input) {
		if (isset($input['neighbors'])) {
			$this->neighbors = array();
			foreach ($input['neighbors'] as $raw) {
				array_push($this->neighbors, new Team($raw));
			}

			unset($input['neighbors']);
		}

		if (isset($input['team_members'])) {
			$this->team_members = array();
			foreach ($input['team_members'] as $raw) {
				array_push($this->team_members, new TeamMember($raw));
			}

			unset($input['team_members']);
		}

		return $input;
	}

}
