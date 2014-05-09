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


use Box\BoxPHPSDK\core\exception\BoxGeneralException;
use Box\BoxPHPSDK\core\exception\CouldNotParseFileUriException;
use Box\BoxPHPSDK\entity\response\FileFactory;

class FileService extends RequestService {

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
	protected $accessToken;

	function __construct($restApiUrl, $uploadUrl, $accessToken) {
		$this->accessToken = $accessToken;
		$this->uploadUrl = $uploadUrl;
		$this->restApiUrl = $restApiUrl;
	}

	/**
	 *
	 *
	 * @param string $filepath
	 * @param string $folder_parent_id
	 * @return array
	 */
	public function send($filepath, $folder_parent_id) {

		$requestUrl = $this->buildUrl($this->uploadUrl, 'files/content');

		$params = array(
			'filename' => "@$filepath",
			'parent_id' => $folder_parent_id,
			'access_token' => $this->accessToken
		);

		$result = $this->execute($requestUrl, $params, 'POST');

		$files = array();

		foreach($result['entries'] as $file) {
			$files[]  = FileFactory::createFromArray($file);
		}

		return $files;
	}

	public function update($file_id, $params=array()) {
		if (empty($params)) {
			return true;
		} else {
			$requestUrl = $this->buildUrl($this->restApiUrl, 'files/' . $file_id, array('access_token' => $this->accessToken));

			$result = $this->execute($requestUrl, json_encode($params), 'PUT');

			return FileFactory::createFromArray($result);
		}
	}

	public function getUri($file_id) {

		$requestUrl = $this->buildUrl($this->restApiUrl, 'files/' . $file_id . '/content', array('access_token' => $this->accessToken));

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_URL, $requestUrl);
		curl_setopt($ch, CURLOPT_HEADER, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$data = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		if ($http_code == 302) {
			$pattern = '/(http.*)/';
			preg_match($pattern, $data, $matches);

			if (!empty($matches)) {
				return trim($matches[0]);
			} else {
				throw new CouldNotParseFileUriException($data);
			}
		}

		$this->throwException($http_code);

		return $data;
	}

	public function delete($file_id) {
		$requestUrl = $this->buildUrl($this->restApiUrl, 'files/' . $file_id, array('access_token' => $this->accessToken));
		$this->execute($requestUrl, array(), 'DELETE');

		return true;
	}

}

?>