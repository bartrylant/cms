<?php

/**
 *
 */
class Assets extends BaseModel
{
	/**
	 * Returns an instance of the specified model
	 * @return object The model instance
	 * @static
	 */
	public static function model($class = __CLASS__)
	{
		return parent::model($class);
	}

	protected $hasBlocks = array(
		'blocks' => array('through' => 'AssetBlocks', 'foreignKey' => 'asset')
	);

	protected $hasContent = array(
		'content' => array('through' => 'AssetContent', 'foreignKey' => 'asset')
	);

	protected $belongsTo = array(
		'folder' => array('model' => 'AssetFolders', 'required' => true)
	);

	protected $attributes = array(
		'path'      => array('type' => AttributeType::String, 'maxSize' => 1000, 'required' => true),
		'filename'  => array('type' => AttributeType::String, 'maxSize' => 1000, 'required' => true),
		'extension' => array('type' => AttributeType::String, 'maxSize' => 50, 'required' => false)
	);
}
