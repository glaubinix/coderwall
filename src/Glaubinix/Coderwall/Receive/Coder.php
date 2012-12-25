<?

namespace Glaubinix\Coderwall\Receive;

class Coder extends Entity {

	/**
	 * @var string
	 */
	public $username;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var string
	 */
	public $location;

	/**
	 * @var string
	 */
	public $team;

	/**
	 * @var array<Badge>
	 */
	public $badges;

	/**
	 * @var array<Account>
	 */
	public $accounts;

	/**
	 * @var integer
	 */
	public $endorsements;

	protected function setObjectEntities($input) {
		if (isset($input['badges'])) {
			$this->badges = array();
			foreach ($input['badges'] as $raw) {
				array_push($this->badges, new Badge($raw));
			}

			unset($input['badges']);
		}

		if (isset($input['accounts'])) {
			$this->accounts = array();
			foreach ($input['accounts'] as $type => $username) {
				array_push($this->accounts, new Account(array('type' => $type, 'username' => $username)));
			}

			unset($input['accounts']);
		}

		return $input;
	}

}
