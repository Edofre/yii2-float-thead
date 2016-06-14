<?php

namespace edofre\floatthead;

/**
 * Class FloatThead
 * @package edofre\fullcalendarscheduler
 */
class FloatThead extends \yii\base\Widget
{
	/** @var string the floatThead will be appended to */
	public $table_id;
	/** @var array Additional options for the plugin */
	public $options = [];

	/**
	 *
	 */
	public function init()
	{
		parent::init();
		$this->registerAssets();
	}

	/**
	 *
	 */
	public function registerAssets()
	{
		CoreAsset::register($this->view);
		$options = \yii\helpers\Json::encode($this->options);
		$this->view->registerJs("$('#{$this->table_id}').floatThead({$options});");
	}
}