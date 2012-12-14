<?php
/* @var $this LClientController */
/* @var $model lClient */

$this->breadcrumbs=array(
	'L Clients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List lClient', 'url'=>array('index')),
	array('label'=>'Create lClient', 'url'=>array('create')),
	array('label'=>'View lClient', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage lClient', 'url'=>array('admin')),
);
?>

<h1>Update lClient <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>