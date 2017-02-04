# Yii2 float thead component

[![Latest Stable Version](https://poser.pugx.org/edofre/yii2-float-thead/v/stable)](https://packagist.org/packages/edofre/yii2-float-thead)
[![Total Downloads](https://poser.pugx.org/edofre/yii2-float-thead/downloads)](https://packagist.org/packages/edofre/yii2-float-thead)
[![Latest Unstable Version](https://poser.pugx.org/edofre/yii2-float-thead/v/unstable)](https://packagist.org/packages/edofre/yii2-float-thead)
[![License](https://poser.pugx.org/edofre/yii2-float-thead/license)](https://packagist.org/packages/edofre/yii2-float-thead)
[![composer.lock](https://poser.pugx.org/edofre/yii2-float-thead/composerlock)](https://packagist.org/packages/edofre/yii2-float-thead)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require edofre/yii2-float-thead "V1.0.2"
```

or add

```
"edofre/yii2-float-thead": "V1.0.2"
```

to the ```require``` section of your `composer.json` file.

## Usage

```php
<?php
\edofre\floatthead\FloatThead::widget(
    [
        'table_id' => 'table-id',
        'options'  => [
            'position'        => 'fixed',
            'scrollContainer' => true,
        ],
    ]
);
?>

<div class='wrapper small' style="overflow: auto; height: 300px;">
    <table id="table-id" class="table large template table-bordered table-striped">
        <thead style="background: white">
        <tr>
            <th>Header 1</th>
            <th>Header 2</th>
            <th>Header...3</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Cell Content 1</td>
            <td>Cell Content 2</td>
            <td>Cell Content 3</td>
        </tr>
        <tr>
            <td>More Cell Content 1</td>
            <td>More Cell Content 2</td>
            <td>More Cell Content 3</td>
        </tr>
        <tr>
            <td>Even More Cell Content 1</td>
            <td>Even More Cell Content 2</td>
            <td>Even More Cell Content 3</td>
        </tr>
        <tr>
            <td>And Repeat 1</td>
            <td>And Repeat 2</td>
            <td>And Repeat 3</td>
        </tr>
        <tr>
            <td>Cell Content 1</td>
            <td>Cell Content 2</td>
            <td>Cell Content 3</td>
        </tr>
        <tr>
            <td>More Cell Content 1</td>
            <td>More Cell Content 2</td>
            <td>More Cell Content 3</td>
        </tr>
        <tr>
            <td>Even More Cell Content 1</td>
            <td>Even More Cell Content 2</td>
            <td>Even More Cell Content 3</td>
        </tr>
        <tr>
            <td>And Repeat 1</td>
            <td>And Repeat 2</td>
            <td>And Repeat 3</td>
        </tr>
        <tr>
            <td>Cell Content 1</td>
            <td>Cell Content 2</td>
            <td>Cell Content 3</td>
        </tr>
        <tr>
            <td>More Cell Content 1</td>
            <td>More Cell Content 2</td>
            <td>More Cell Content 3</td>
        </tr>
        <tr>
            <td>Even More Cell Content 1</td>
            <td>Even More Cell Content 2</td>
            <td>Even More Cell Content 3</td>
        </tr>
        <tr>
            <td>And Repeat 1</td>
            <td>And Repeat 2</td>
            <td>And Repeat 3</td>
        </tr>
        <tr>
            <td>Cell Content 1</td>
            <td>Cell Content 2</td>
            <td>Cell Content 3</td>
        </tr>
        <tr>
            <td>More Cell Content 1</td>
            <td>More Cell Content 2</td>
            <td>More Cell Content 3</td>
        </tr>
        <tr>
            <td>Even More Cell Content 1</td>
            <td>Even More Cell Content 2</td>
            <td>Even More Cell Content 3</td>
        </tr>
        <tr>
            <td>And Repeat 1</td>
            <td>And Repeat 2</td>
            <td>And Repeat 3</td>
        </tr>
        <tr>
            <td>Cell Content 1</td>
            <td>Cell Content 2</td>
            <td>Cell Content 3</td>
        </tr>
        <tr>
            <td>More Cell Content 1</td>
            <td>More Cell Content 2</td>
            <td>More Cell Content 3</td>
        </tr>
        <tr>
            <td>Even More Cell Content 1</td>
            <td>Even More Cell Content 2</td>
            <td>Even More Cell Content 3</td>
        </tr>
        </tbody>
    </table>
</div>
?>
```