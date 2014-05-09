<?php
namespace Box\BoxPHPSDK\entity\response;

use Box\BoxPHPSDK\entity\response\mini\UserFactory;

class FolderFactory  {

	public static function createFromArray($array) {

		$folder = new Folder();

		$folder->setId($array['id']);
		$folder->setSequenceId($array['sequence_id']);
		$folder->setEtag($array['etag']);
		$folder->setName($array['name']);

		$folder->setCreatedAt(new \DateTime($array['created_at']));
		$folder->setModifiedAt(new \DateTime($array['modified_at']));

		$folder->setDescription($array['description']);
		$folder->setSize($array['size']);

		$folder->setCreatedBy(UserFactory::createFromArray(
			$array['created_by']
		));

		$folder->setModifiedBy(UserFactory::createFromArray(
			$array['modified_by']
		));

		if ($array['trashed_at'] != null) {
			$folder->setTrashedAt(new \DateTime($array['trashed_at']));
		} else {
			$folder->setTrashedAt(null);
		}

		if ($array['purged_at'] != null) {
			$folder->setPurgetAt(new \DateTime($array['purged_at']));
		} else {
			$folder->setPurgedAt(null);
		}

		$folder->setContentCreatedAt(new \DateTime($array['content_created_at']));
		$folder->setContentModifiedAt(new \DateTime($array['content_modified_at']));

		$folder->setOwnedBy(UserFactory::createFromArray(
			$array['owned_by']
		));

		$folder->setSharedLink(SharedLinkFactory::createFromArray($array['shared_link']));

		$folder->setFolderUploadEmail((object)$array['folder_upload_email']);

		return $folder;
	}

}

?>