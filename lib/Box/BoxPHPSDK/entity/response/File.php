<?php
namespace Box\BoxPHPSDK\entity\response;


class File extends Item {

	/**
	 * @var string
	 */
	protected $sha1;

	public function __construct() {
		$this->type = 'file';
	}

	/**
	 * @param string $sha1
	 * @return void
	 */
	public function setSha1($sha1) {
		$this->sha1 = $sha1;
	}

	/**
	 * @return string
	 */
	public function getSha1() {
		return $this->sha1;
	}

}

?>