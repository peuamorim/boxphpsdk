<?php
namespace Box\BoxPHPSDK\service;

/*                                                                        *
 * This script belongs to the TYPO3 Flow framework.                       *
 * This script belongs to the TYPO3 Flow package "".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
**/

class OAuth2Service extends RequestService {

	/**
	 * @var string
	 */
	protected $oauth2Url;

	/**
	 * @var string
	 */
	protected $clientId;

	/**
	 * @var string
	 */
	protected $clientSecret;


	/**
	 * Constructor
	 * @param string $oauth2Url
	 */
	function __construct($clientId, $clientSecret, $oauth2Url) {
		$this->clientId = $clientId;
		$this->clientSecret = $clientSecret;
		$this->oauth2Url = $oauth2Url;
	}

	/**
	 * Returns url for authorization
	 *
	 * @return string
	 */
	public function getAuthorizeUrl($redirect_url) {
		$params = array(
			'response_type' => 'code',
			'client_id' => $this->clientId,
			'redirect_uri' => $redirect_url
		);

		return $this->buildUrl($this->oauth2Url, 'authorize', $params);
	}

	/**
	 * Retrieves the tokens by using the authorization code
	 *
	 * @param string $code
	 * @return array
	 */
	public function getTokensByCode($code) {

		$params = array(
			'grant_type' => 'authorization_code',
			'code' => $code,
			'client_id' => $this->clientId,
			'client_secret' => $this->clientSecret,

		);

		$url = $this->buildUrl($this->oauth2Url, 'token/');

		$result = $this->execute($url, $params, 'POST');

		return $result;

	}

	/**
	 * Retrieves the tokens by using the refresh token
	 *
	 * @param string $code
	 * @return array
	 */
	public function getTokensByRefreshToken($refresh_token) {

		$params = array(
			'grant_type' => 'refresh_token',
			'refresh_token' => $refresh_token,
			'client_id' => $this->clientId,
			'client_secret' => $this->clientSecret
		);

		$url = $this->buildUrl($this->oauth2Url, 'token/');

		$result = $this->execute($url, $params, 'POST');

		return $result;

	}


}

?>