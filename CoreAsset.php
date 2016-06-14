<?php

namespace edofre\floatthead;

/**
 * Class CoreAsset
 * @package edofre\floatthead
 */
class CoreAsset extends \yii\web\AssetBundle
{
	/** @var string */
	public $sourcePath = '@bower/floatThead/dist';
	/** @var array */
	public $js = [
		'jquery.floatThead.js',
	];
	/** @var array */
	public $depends = [
		'yii\web\JqueryAsset',
	];
}
