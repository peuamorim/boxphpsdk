<?php
namespace Box\BoxPHPSDK\entity\response\mini;

/*                                                                        *
 * This script belongs to the TYPO3 Flow framework.                       *
 * This script belongs to the TYPO3 Flow package "".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */



class User {

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $login;

	function __construct($id, $login, $name, $type) {
		$this->id = $id;
		$this->login = $login;
		$this->name = $name;
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getLogin() {
		return $this->login;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}


}

?>