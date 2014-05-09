<?php
namespace Box\BoxPHPSDK\entity\request\get;


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

class FolderRequest {

	/**
	 * @var bool
	 */
	protected $retrieveSyncState = false;

	/**
	 * @var bool
	 */
	protected $retrieveHasCollaborations = false;

	/**
	 * @var bool
	 */
	protected $retrievePermissions = false;

	/**
	 * @var bool
	 */
	protected $retrieveTags = false;

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @param boolean $retrieveHasCollaborations
	 * @return void
	 */
	public function setRetrieveHasCollaborations($retrieveHasCollaborations) {
		$this->retrieveHasCollaborations = $retrieveHasCollaborations;
	}

	/**
	 * @return boolean
	 */
	public function getRetrieveHasCollaborations() {
		return $this->retrieveHasCollaborations;
	}

	/**
	 * @param boolean $retrievePermissions
	 * @return void
	 */
	public function setRetrievePermissions($retrievePermissions) {
		$this->retrievePermissions = $retrievePermissions;
	}

	/**
	 * @return boolean
	 */
	public function getRetrievePermissions() {
		return $this->retrievePermissions;
	}

	/**
	 * @param boolean $retrieveSyncState
	 * @return void
	 */
	public function setRetrieveSyncState($retrieveSyncState) {
		$this->retrieveSyncState = $retrieveSyncState;
	}

	/**
	 * @return boolean
	 */
	public function getRetrieveSyncState() {
		return $this->retrieveSyncState;
	}

	/**
	 * @param boolean $retrieveTags
	 * @return void
	 */
	public function setRetrieveTags($retrieveTags) {
		$this->retrieveTags = $retrieveTags;
	}

	/**
	 * @return boolean
	 */
	public function getRetrieveTags() {
		return $this->retrieveTags;
	}



}

?>