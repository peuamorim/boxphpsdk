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


class File extends AbstractItem {


	/**
	 * @var string
	 */
	protected $etag;

	/**
	 * @var string
	 */
	protected $sha1;


	function __construct($etag, $id, $name, $sequence_id, $sha1, $type) {
		$this->etag = $etag;
		$this->id = $id;
		$this->name = $name;
		$this->sequence_id = $sequence_id;
		$this->sha1 = $sha1;
		$this->type = $type;
	}

	/**
	 * @return string
	 */
	public function getEtag() {
		return $this->etag;
	}


	/**
	 * @return string
	 */
	public function getSha1() {
		return $this->sha1;
	}



}

?>