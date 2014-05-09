<?php
namespace Box\BoxPHPSDK\entity\response\mini;

class UserFactory {

	public static function createFromArray($array) {

		$user = new User(
			$array['id'],
			$array['login'],
			$array['name'],
			$array['type']
		);

		return $user;
	}

}

?>