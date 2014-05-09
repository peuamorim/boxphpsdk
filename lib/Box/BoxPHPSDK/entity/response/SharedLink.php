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


class SharedLink {

	/**
	 * @var string
	 */
	protected $url;

	/**
	 * @var string
	 */
	protected $download_url;

	/**
	 * @var string
	 */
	protected $vanity_url;

	/**
	 * @var boolean
	 */
	protected $is_password_enable;

	/**
	 * @var \DateTime
	 */
	protected $unshared_at;

	/**
	 * @var int
	 */
	protected $download_count;

	/**
	 * @var int
	 */
	protected $preview_count;

	/**
	 * @var string
	 */
	protected $access;

	/**
	 * @param mixed $permission
	 * @return void
	 */
	public function setPermission($permission) {
		$this->permission = $permission;
	}

	/**
	 * @return mixed
	 */
	public function getPermission() {
		return $this->permission;
	}

	/**
	 *
	 */
	protected $permission;


	/**
	 * @return string
	 */
	public function getAccess() {
		return $this->access;
	}

	/**
	 * @return int
	 */
	public function getDownloadCount() {
		return $this->download_count;
	}

	/**
	 * @return string
	 */
	public function getDownloadUrl() {
		return $this->download_url;
	}

	/**
	 * @return boolean
	 */
	public function getIsPasswordEnable() {
		return $this->is_password_enable;
	}


	/**
	 * @return int
	 */
	public function getPreviewCount() {
		return $this->preview_count;
	}

	/**
	 * @return \DateTime
	 */
	public function getUnsharedAt() {
		return $this->unshared_at;
	}

	/**
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @return string
	 */
	public function getVanityUrl() {
		return $this->vanity_url;
	}

	/**
	 * @param string $access
	 * @return void
	 */
	public function setAccess($access) {
		$this->access = $access;
	}

	/**
	 * @param int $download_count
	 * @return void
	 */
	public function setDownloadCount($download_count) {
		$this->download_count = $download_count;
	}

	/**
	 * @param string $download_url
	 * @return void
	 */
	public function setDownloadUrl($download_url) {
		$this->download_url = $download_url;
	}

	/**
	 * @param boolean $is_password_enable
	 * @return void
	 */
	public function setIsPasswordEnable($is_password_enable) {
		$this->is_password_enable = $is_password_enable;
	}


	/**
	 * @param int $preview_count
	 * @return void
	 */
	public function setPreviewCount($preview_count) {
		$this->preview_count = $preview_count;
	}

	/**
	 * @param \DateTime $unshared_at
	 * @return void
	 */
	public function setUnsharedAt($unshared_at) {
		$this->unshared_at = $unshared_at;
	}

	/**
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * @param string $vanity_url
	 * @return void
	 */
	public function setVanityUrl($vanity_url) {
		$this->vanity_url = $vanity_url;
	}




}

?>