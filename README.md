# Yii2 fullcalendar scheduler component

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require edofre/yii2-float-thead "V1.0.1"
```

or add

```
"edofre/yii2-float-thead": "V1.0.1"
```

to the ```require``` section of your `composer.json` file.

## Usage

```php
<?php
\edofre\floatthead\FloatThead::widget(
	[
		'table_id' => 'table-id-name',
		'options'  => [
			'top' => 100
		],
	]
);
?>
```