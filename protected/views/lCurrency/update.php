<?php
/* @var $this LCurrencyController */
/* @var $model lCurrency */

$this->breadcrumbs=array(
	'L Currencies'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List lCurrency', 'url'=>array('index')),
	array('label'=>'Create lCurrency', 'url'=>array('create')),
	array('label'=>'View lCurrency', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage lCurrency', 'url'=>array('admin')),
);
?>

<h1>Update lCurrency <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>