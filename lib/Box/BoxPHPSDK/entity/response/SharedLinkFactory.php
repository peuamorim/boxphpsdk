<?php
namespace Box\BoxPHPSDK\entity\response;


class SharedLinkFactory {

	public static function createFromArray($array) {

		if ($array == null) {
			return null;
		} else {
			$sharedLink = new SharedLink();
			$sharedLink->setUrl($array['url']);
			$sharedLink->setDownloadUrl($array['download_url']);
			$sharedLink->setVanityUrl($array['vanity_url']);
			$sharedLink->setIsPasswordEnable($array['is_password_enable']);

			if ($array['unshare_at'] == null) {
				$sharedLink->setUnsharedAt(null);
			} else {
				$sharedLink->setUnsharedAt(new \DateTime($array['unshare_at']));
			}

			$sharedLink->setDownloadCount($array['download_count']);
			$sharedLink->setPreviewCount($array['preview_count']);
			$sharedLink->setAccess($array['access']);
			$sharedLink->setPermission(PermissionFactory::createFromArray($array['permissions']));

			return $sharedLink;
		}


	}

}

?>