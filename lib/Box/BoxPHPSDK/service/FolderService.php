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
 *                                                                        */


use Box\BoxPHPSDK\entity\response\FolderFactory;

class FolderService extends RequestService {

	/**
	 * @var string
	 */
	protected $restApiUrl;

	/**
	 * @var string
	 */
	protected $accessToken;

	/**
	 * Constructor
	 * @param string $restApiUrl
	 * @param string $accessToken
	 */
	function __construct($restApiUrl, $accessToken) {
		$this->accessToken = $accessToken;
		$this->restApiUrl = $restApiUrl;

	}

	/**
	 *
	 * @param $request
	 * @return mixed
	 */
	public function get($request) {

		$result = $this->execute('/folders', $request, 'GET');
		$factory = new FolderFactory();

		return $factory->createFromJson($result);

	}

	/**
	 *
	 *
	 * @param string $name
	 * @param string $parent_id
	 * @return string
	 */
	public function createFolder($name, $parent_id) {
		$request = array(
			'name' => $name,
			'parent' => array(
				'id' => $parent_id
			)
		);

		$url = $this->buildUrl($this->restApiUrl, '/folders', array('access_token' => $this->accessToken));

		$result = $this->execute($url, json_encode($request), 'POST');

		return FolderFactory::createFromArray($result);
	}

	public function delete($request) {
		$result = $this->execute('/folders', $request, 'DELETE');
	}


}

?>