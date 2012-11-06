<?

namespace Glaubinix\Coderwall\Receive;

class Team {

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
	 * @var array<Coder>
	 */
	public $team_members;

}
