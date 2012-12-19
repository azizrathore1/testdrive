<?php
/* @var $this CurrencyController */
/* @var $data Currency */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->currency_id), array('view', 'id'=>$data->currency_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('currency_pair')); ?>:</b>
	<?php echo CHtml::encode($data->currency_pair); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('decimals')); ?>:</b>
	<?php echo CHtml::encode($data->decimals); ?>
	<br />


</div>