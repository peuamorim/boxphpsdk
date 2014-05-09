<?php
namespace Box\BoxPHPSDK\service;

use Box\BoxPHPSDK\core\exception\BadRequestException;
use Box\BoxPHPSDK\core\exception\BoxGeneralException;
use Box\BoxPHPSDK\core\exception\ConflictException;
use Box\BoxPHPSDK\core\exception\ForbiddenException;
use Box\BoxPHPSDK\core\exception\InternalServerErrorException;
use Box\BoxPHPSDK\core\exception\MethodNotAllowedException;
use Box\BoxPHPSDK\core\exception\NotFoundException;
use Box\BoxPHPSDK\core\exception\PreconditionFailedException;
use Box\BoxPHPSDK\core\exception\TooManyRequestsException;
use Box\BoxPHPSDK\core\exception\UnauthorizedException;
use Box\BoxPHPSDK\core\exception\UnavailableException;

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

class RequestService {

	protected function execute($url, $params = array(), $method = 'GET') {
		$result = NULL;
		switch ($method) {
			case 'GET':
				$result = $this->get($url);
				break;
			case 'POST':
				$result = $this->post($url, $params);
				break;
			case 'PUT':
				$result = $this->put($url, $params);
				break;
			case 'DELETE':
				$result = $this->delete($url, $params);
				break;
		}

		$array = json_decode($result, TRUE);

		if (isset($array['type']) && $array['type'] == 'error') {
			$this->throwException($array['status']);
		}

		return $array;
	}

	/**
	 * @param string $requestUrl
	 * @return string
	 */
	protected function buildUrl($base, $requestUrl, $params = array()) {
		if (empty($params)) {
			return $base . $requestUrl;
		} else {
			return $base . $requestUrl . '?' . http_build_query($params);
		}
	}

	/**
	 *
	 *
	 * @param $args
	 * @return void
	 * @throws \Box\BoxPHPSDK\core\exception\InternalServerErrorException
	 * @throws \Box\BoxPHPSDK\core\exception\BoxGeneralException
	 * @throws \Box\BoxPHPSDK\core\exception\ForbiddenException
	 * @throws \Box\BoxPHPSDK\core\exception\MethodNotAllowedException
	 * @throws \Box\BoxPHPSDK\core\exception\BadRequestException
	 * @throws \Box\BoxPHPSDK\core\exception\NotFoundException
	 * @throws \Box\BoxPHPSDK\core\exception\PreconditionFailedException
	 * @throws \Box\BoxPHPSDK\core\exception\TooManyRequestsException
	 * @throws \Box\BoxPHPSDK\core\exception\ConflictException
	 * @throws \Box\BoxPHPSDK\core\exception\UnavailableException
	 * @throws \Box\BoxPHPSDK\core\exception\UnauthorizedException
	 */
	protected function throwException($status) {
		$encoded = json_encode($status);
		switch ($status) {
			case 400:
				throw new BadRequestException($encoded);
				break;
			case 401:
				throw new UnauthorizedException($encoded);
				break;
			case 403:
				throw new ForbiddenException($encoded);
				break;
			case 404:
				throw new NotFoundException($encoded);
				break;
			case 405;
				throw new MethodNotAllowedException($encoded);
				break;
			case 409;
				throw new ConflictException($encoded);
				break;
			case 412:
				throw new PreconditionFailedException($encoded);
				break;
			case 429:
				throw new TooManyRequestsException($encoded);
				break;
			case 500:
				throw new InternalServerErrorException($encoded);
				break;
			case 503:
				throw new UnavailableException($encoded);
				break;
			default:
				throw new BoxGeneralException($encoded);
				break;
		}
	}

	protected function get($url) {
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		$data = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		if ($http_code >= 400 && $data==false) {
			$this->throwException($http_code);
		}


		return $data;
	}

	protected function post($url, $params) {
//		var_dump($url);
//		var_dump($params);
//		die();
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$data = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		if ($http_code >= 400 && $data==false) {
			$this->throwException($http_code);
		}

		return $data;
	}

	protected function put($url, $params) {

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$data = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		if ($http_code >= 400 && $data==false) {
			$this->throwException($http_code);
		}

		return $data;
	}

	protected function delete($url, $params = '') {
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_FAILONERROR, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
		$data = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

		curl_close($ch);

		if ($http_code >= 400 && $data==false) {
			$this->throwException($http_code);
		}

		return $data;
	}
}

?>