<?php
/* @var $this LCurrencyController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'L Currencies',
);

$this->menu=array(
	array('label'=>'Create lCurrency', 'url'=>array('create')),
	array('label'=>'Manage lCurrency', 'url'=>array('admin')),
);
?>

<h1>L Currencies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
