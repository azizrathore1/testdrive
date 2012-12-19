<?php
/* @var $this CurrencyController */
/* @var $model Currency */

$this->breadcrumbs=array(
	'Currencies'=>array('index'),
	$model->currency_id=>array('view','id'=>$model->currency_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Currency', 'url'=>array('index')),
	array('label'=>'Create Currency', 'url'=>array('create')),
	array('label'=>'View Currency', 'url'=>array('view', 'id'=>$model->currency_id)),
	array('label'=>'Manage Currency', 'url'=>array('admin')),
);
?>

<h1>Update Currency <?php echo $model->currency_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>