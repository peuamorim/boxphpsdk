<?php
namespace Box\BoxPHPSDK\entity\response;

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


class Permission {

	/**
	 * @var boolean
	 */
	protected $can_download;

	/**
	 * @var boolean
	 */
	protected $can_upload;

	/**
	 * @var boolean
	 */
	protected $can_rename;

	/**
	 * @var boolean
	 */
	protected $can_delete;

	/**
	 * @var boolean
	 */
	protected $can_share;

	/**
	 * @var boolean
	 */
	protected $can_invite_collaborator;

	/**
	 * @var boolean
	 */
	protected $can_set_share_access;

	public function __construct() {
		$this->can_download = false;
		$this->can_upload = false;
		$this->can_rename = false;
		$this->can_delete = false;
		$this->can_share = false;
		$this->can_invite_collaborator = false;
		$this->can_set_share_access = false;
	}

	/**
	 * @param boolean $can_delete
	 * @return void
	 */
	public function setCanDelete($can_delete) {
		$this->can_delete = $can_delete;
	}

	/**
	 * @param boolean $can_download
	 * @return void
	 */
	public function setCanDownload($can_download) {
		$this->can_download = $can_download;
	}

	/**
	 * @param boolean $can_invite_collaborator
	 * @return void
	 */
	public function setCanInviteCollaborator($can_invite_collaborator) {
		$this->can_invite_collaborator = $can_invite_collaborator;
	}

	/**
	 * @param boolean $can_rename
	 * @return void
	 */
	public function setCanRename($can_rename) {
		$this->can_rename = $can_rename;
	}

	/**
	 * @param boolean $can_set_share_access
	 * @return void
	 */
	public function setCanSetShareAccess($can_set_share_access) {
		$this->can_set_share_access = $can_set_share_access;
	}

	/**
	 * @param boolean $can_share
	 * @return void
	 */
	public function setCanShare($can_share) {
		$this->can_share = $can_share;
	}

	/**
	 * @param boolean $can_upload
	 * @return void
	 */
	public function setCanUpload($can_upload) {
		$this->can_upload = $can_upload;
	}


}

?>