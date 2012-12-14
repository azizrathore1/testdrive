<?php
/* @var $this LClientController */
/* @var $model lClient */

$this->breadcrumbs=array(
	'L Clients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List lClient', 'url'=>array('index')),
	array('label'=>'Manage lClient', 'url'=>array('admin')),
);
?>

<h1>Create lClient</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>