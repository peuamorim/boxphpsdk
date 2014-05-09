<?php
namespace Box\BoxPHPSDK\entity\response;


class Item {

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var string
	 */
	protected $sequence_id;

	/**
	 * @var string
	 */
	protected $etag;

	/**
	 * @var name
	 */
	protected $name;

	/**
	 * @var \DateTime
	 */
	protected $created_at;

	/**
	 * @var \DateTime
	 */
	protected $modified_at;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var integer
	 */
	protected $size;

	protected $path_collection;

	protected $created_by;

	protected $modified_by;

	/**
	 * @var \DateTime
	 */
	protected $trashed_at;

	/**
	 * @var \DateTime
	 */
	protected $purged_at;

	/**
	 * @var \DateTime
	 */
	protected $content_created_at;

	/**
	 * @var \DateTime
	 */
	protected $content_modified_at;

	protected $owned_by;

	protected $shared_link;

	protected $folder_upload_email;


	/**
	 * @var string
	 */
	protected $item_status;

	protected $item_collection;

	/**
	 * @var string
	 */
	protected $sync_state;

	/**
	 * @var boolean
	 */
	protected $has_collaborations;


	protected $permissions;

	/**
	 * @var array
	 */
	protected $tags;

	/**
	 * @return \DateTime
	 */
	public function getContentCreatedAt() {
		return $this->content_created_at;
	}

	/**
	 * @return \DateTime
	 */
	public function getContentModifiedAt() {
		return $this->content_modified_at;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedBy() {
		return $this->created_by;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @return string
	 */
	public function getEtag() {
		return $this->etag;
	}

	/**
	 * @return mixed
	 */
	public function getFolderUploadEmail() {
		return $this->folder_upload_email;
	}

	/**
	 * @return boolean
	 */
	public function getHasCollaborations() {
		return $this->has_collaborations;
	}

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getItemCollection() {
		return $this->item_collection;
	}

	/**
	 * @return string
	 */
	public function getItemStatus() {
		return $this->item_status;
	}

	/**
	 * @return \DateTime
	 */
	public function getModifiedAt() {
		return $this->modified_at;
	}

	/**
	 * @return mixed
	 */
	public function getModifiedBy() {
		return $this->modified_by;
	}

	/**
	 * @return \name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getOwnedBy() {
		return $this->owned_by;
	}

	/**
	 * @return mixed
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * @return mixed
	 */
	public function getPathCollection() {
		return $this->path_collection;
	}

	/**
	 * @return mixed
	 */
	public function getPermissions() {
		return $this->permissions;
	}

	/**
	 * @return \DateTime
	 */
	public function getPurgedAt() {
		return $this->purged_at;
	}

	/**
	 * @return string
	 */
	public function getSequenceId() {
		return $this->sequence_id;
	}

	/**
	 * @return mixed
	 */
	public function getSharedLink() {
		return $this->shared_link;
	}

	/**
	 * @return int
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * @return string
	 */
	public function getSyncState() {
		return $this->sync_state;
	}

	/**
	 * @return array
	 */
	public function getTags() {
		return $this->tags;
	}

	/**
	 * @return \DateTime
	 */
	public function getTrashedAt() {
		return $this->trashed_at;
	}

	/**
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param \DateTime $content_created_at
	 * @return void
	 */
	public function setContentCreatedAt($content_created_at) {
		$this->content_created_at = $content_created_at;
	}

	/**
	 * @param \DateTime $content_modified_at
	 * @return void
	 */
	public function setContentModifiedAt($content_modified_at) {
		$this->content_modified_at = $content_modified_at;
	}

	/**
	 * @param \DateTime $created_at
	 * @return void
	 */
	public function setCreatedAt($created_at) {
		$this->created_at = $created_at;
	}

	/**
	 * @param mixed $created_by
	 * @return void
	 */
	public function setCreatedBy($created_by) {
		$this->created_by = $created_by;
	}

	/**
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @param string $etag
	 * @return void
	 */
	public function setEtag($etag) {
		$this->etag = $etag;
	}

	/**
	 * @param mixed $folder_upload_email
	 * @return void
	 */
	public function setFolderUploadEmail($folder_upload_email) {
		$this->folder_upload_email = $folder_upload_email;
	}

	/**
	 * @param boolean $has_collaborations
	 * @return void
	 */
	public function setHasCollaborations($has_collaborations) {
		$this->has_collaborations = $has_collaborations;
	}

	/**
	 * @param string $id
	 * @return void
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @param mixed $item_collection
	 * @return void
	 */
	public function setItemCollection($item_collection) {
		$this->item_collection = $item_collection;
	}

	/**
	 * @param string $item_status
	 * @return void
	 */
	public function setItemStatus($item_status) {
		$this->item_status = $item_status;
	}

	/**
	 * @param \DateTime $modified_at
	 * @return void
	 */
	public function setModifiedAt($modified_at) {
		$this->modified_at = $modified_at;
	}

	/**
	 * @param mixed $modified_by
	 * @return void
	 */
	public function setModifiedBy($modified_by) {
		$this->modified_by = $modified_by;
	}

	/**
	 * @param \Box\entity\response\name $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param mixed $owned_by
	 * @return void
	 */
	public function setOwnedBy($owned_by) {
		$this->owned_by = $owned_by;
	}

	/**
	 * @param mixed $path_collection
	 * @return void
	 */
	public function setPathCollection($path_collection) {
		$this->path_collection = $path_collection;
	}

	/**
	 * @param mixed $permissions
	 * @return void
	 */
	public function setPermissions($permissions) {
		$this->permissions = $permissions;
	}

	/**
	 * @param \DateTime $purged_at
	 * @return void
	 */
	public function setPurgedAt($purged_at) {
		$this->purged_at = $purged_at;
	}

	/**
	 * @param string $sequence_id
	 * @return void
	 */
	public function setSequenceId($sequence_id) {
		$this->sequence_id = $sequence_id;
	}

	/**
	 * @param mixed $shared_link
	 * @return void
	 */
	public function setSharedLink($shared_link) {
		$this->shared_link = $shared_link;
	}

	/**
	 * @param int $size
	 * @return void
	 */
	public function setSize($size) {
		$this->size = $size;
	}

	/**
	 * @param string $sync_state
	 * @return void
	 */
	public function setSyncState($sync_state) {
		$this->sync_state = $sync_state;
	}

	/**
	 * @param array $tags
	 * @return void
	 */
	public function setTags($tags) {
		$this->tags = $tags;
	}

	/**
	 * @param \DateTime $trashed_at
	 * @return void
	 */
	public function setTrashedAt($trashed_at) {
		$this->trashed_at = $trashed_at;
	}

	/**
	 * @param string $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}







}

?>