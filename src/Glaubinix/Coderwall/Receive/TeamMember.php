<?

namespace Glaubinix\Coderwall\Receive;

class TeamMember extends Entity {

	/**
	 * @var string
	 */
	public $username;

	/**
	 * @var string
	 */
	public $name;

	/**
	 * @var integer
	 */
	public $badges_count;

	/**
	 * @var integer
	 */
	public $endorsements_count;

}
