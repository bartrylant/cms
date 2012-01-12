<?php

/**
 *
 */
class AssetContent extends BaseContentModel
{
	protected $model = 'Assets';
	protected $foreignKey = 'asset';

	/**
	 * Returns an instance of the specified model
	 * @return object The model instance
	 * @static
	 */
	public static function model($class = __CLASS__)
	{
		return parent::model($class);
	}
}
