<?php
/* @var $this LClientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'L Clients',
);

$this->menu=array(
	array('label'=>'Create lClient', 'url'=>array('create')),
	array('label'=>'Manage lClient', 'url'=>array('admin')),
);
?>

<h1>L Clients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
