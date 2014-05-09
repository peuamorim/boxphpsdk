<?php
namespace Box\BoxPHPSDK\entity\response;
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


class PermissionFactory {

	public static function createFromArray($array) {
		$permission = new Permission();

		if(isset($array['can_download'])) {
			$permission->setCanDownload($array['can_download']);
		}

		if(isset($array['can_upload'])) {
			$permission->setCanUpload($array['can_upload']);
		}

		if(isset($array['can_rename'])) {
			$permission->setCanRename($array['can_rename']);
		}

		if(isset($array['can_delete'])) {
			$permission->setCanDelete($array['can_delete']);
		}

		if(isset($array['can_share'])) {
			$permission->setCanShare($array['can_share']);
		}

		if(isset($array['can_invite_collaborator'])) {
			$permission->setCanInviteCollaborator($array['can_invite_collaborator']);
		}

		return $permission;


	}


}

?>