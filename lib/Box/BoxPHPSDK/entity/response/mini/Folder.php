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



class Folder extends AbstractItem {


	function __construct($id, $name, $sequence_id, $type) {
		$this->id = $id;
		$this->name = $name;
		$this->sequence_id = $sequence_id;
		$this->type = $type;
	}

}

?>