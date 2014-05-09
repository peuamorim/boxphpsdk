<?php
namespace Box\BoxPHPSDK\entity\response;


use Box\BoxPHPSDK\entity\response\mini\UserFactory;

class FileFactory  {

	public static function createFromArray($array) {

		$file = new File();

		$file->setSha1($array['sha1']);
		$file->setId($array['id']);
		$file->setSequenceId($array['sequence_id']);
		$file->setEtag($array['etag']);
		$file->setName($array['name']);
//
		$file->setCreatedAt(new \DateTime($array['created_at']));
		$file->setModifiedAt(new \DateTime($array['modified_at']));

		$file->setDescription($array['description']);
		$file->setSize($array['size']);

		$file->setCreatedBy(UserFactory::createFromArray(
			$array['created_by']
		));

		$file->setModifiedBy(UserFactory::createFromArray(
			$array['modified_by']
		));

		if ($array['trashed_at'] != null) {
			$file->setTrashedAt(new \DateTime($array['trashed_at']));
		} else {
			$file->setTrashedAt(null);
		}

		if ($array['purged_at'] != null) {
			$file->setPurgetAt(new \DateTime($array['purged_at']));
		} else {
			$file->setPurgedAt(null);
		}

		$file->setContentCreatedAt(new \DateTime($array['content_created_at']));
		$file->setContentModifiedAt(new \DateTime($array['content_modified_at']));

		$file->setOwnedBy(UserFactory::createFromArray(
			$array['owned_by']
		));

		$file->setSharedLink(SharedLinkFactory::createFromArray($array['shared_link']));

		return $file;
	}


}

?>