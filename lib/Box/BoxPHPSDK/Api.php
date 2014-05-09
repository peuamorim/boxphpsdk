<?php
namespace Box\BoxPHPSDK;


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


use Box\BoxPHPSDK\service\FileService;
use Box\BoxPHPSDK\service\FolderService;
use Box\BoxPHPSDK\service\OAuth2Service;

class Api {

	/**
	 * @var string
	 */
	protected $clientId;

	/**
	 * @var string
	 */
	protected $clientSecret;

	/**
	 * @var string
	 */
	protected $restApiUrl;

	/**
	 * @var string
	 */
	protected $uploadUrl;

	/**
	 * @var string
	 */
	protected $oauthUrl;

	/**
	 * @var string
	 */
	protected $accessToken;

	/**
	 * @var \Box\BoxPHPSDK\service\FolderService
	 */
	public $folder=null;

	/**
	 * @var \Box\BoxPHPSDK\service\FileService
	 */
	public $file=null;

	/**
	 * @var \Box\BoxPHPSDK\service\OAuth2Service
	 */
	public $oauth2=null;

	function __construct($client_id, $client_secret, $access_token=null) {
		$this->uploadUrl = 'https://upload.box.com/api/2.0/';
		$this->restApiUrl = 'https://api.box.com/2.0/';
		$this->oauthUrl = 'https://www.box.com/api/oauth2/';

		$this->accessToken = $access_token;

		$this->clientId = $client_id;
		$this->clientSecret = $client_secret;
	}

	/**
	 * @return FolderService
	 */
	public function getFolderService() {
		if (is_null($this->folder)) {
			$this->folder = new FolderService($this->restApiUrl, $this->accessToken);
			return $this->folder;
		}

		return $this->folder;
	}

	/**
	 * @return FileService
	 */
	public function getFileService() {
		if (is_null($this->file)) {
			$this->file = new FileService($this->restApiUrl, $this->uploadUrl, $this->accessToken);
			return $this->file;
		}

		return $this->file;
	}

	/**
	 * @return OAuth2Service
	 */
	public function getOAuth2Service() {
		if (is_null($this->oauth2)) {
			$this->oauth2 = new OAuth2Service($this->clientId, $this->clientSecret, $this->oauthUrl);
			return $this->oauth2;
		}

		return $this->oauth2;
	}
}

?>