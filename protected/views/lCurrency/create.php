<?php
/* @var $this LCurrencyController */
/* @var $model lCurrency */

$this->breadcrumbs=array(
	'L Currencies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List lCurrency', 'url'=>array('index')),
	array('label'=>'Manage lCurrency', 'url'=>array('admin')),
);
?>

<h1>Create lCurrency</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>