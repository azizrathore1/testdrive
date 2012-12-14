<?php
/* @var $this LCurrencyController */
/* @var $data lCurrency */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_pair')); ?>:</b>
	<?php echo CHtml::encode($data->currency_pair); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decimals')); ?>:</b>
	<?php echo CHtml::encode($data->decimals); ?>
	<br />


</div>