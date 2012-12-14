<?php
/* @var $this LClientController */
/* @var $model lClient */

$this->breadcrumbs=array(
	'L Clients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List lClient', 'url'=>array('index')),
	array('label'=>'Create lClient', 'url'=>array('create')),
	array('label'=>'Update lClient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete lClient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage lClient', 'url'=>array('admin')),
);
?>

<h1>View lClient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'account_number',
		'clinet_email',
		'phone',
		'trader',
		'saleperson',
	),
)); ?>
