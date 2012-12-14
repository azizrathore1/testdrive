<?php
/* @var $this LClientController */
/* @var $data lClient */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('account_number')); ?>:</b>
	<?php echo CHtml::encode($data->account_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clinet_email')); ?>:</b>
	<?php echo CHtml::encode($data->clinet_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trader')); ?>:</b>
	<?php echo CHtml::encode($data->trader); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('saleperson')); ?>:</b>
	<?php echo CHtml::encode($data->saleperson); ?>
	<br />


</div>