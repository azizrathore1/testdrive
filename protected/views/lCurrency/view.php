<?php
/* @var $this LCurrencyController */
/* @var $model lCurrency */

$this->breadcrumbs=array(
	'L Currencies'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List lCurrency', 'url'=>array('index')),
	array('label'=>'Create lCurrency', 'url'=>array('create')),
	array('label'=>'Update lCurrency', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete lCurrency', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage lCurrency', 'url'=>array('admin')),
);
?>

<h1>View lCurrency #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'currency_pair',
		'decimals',
	),
)); ?>
