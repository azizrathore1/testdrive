<?php
/* @var $this LClientController */
/* @var $model lClient */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'l-client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'account_number'); ?>
		<?php echo $form->textField($model,'account_number',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'account_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clinet_email'); ?>
		<?php echo $form->textField($model,'clinet_email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'clinet_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'trader'); ?>
		<?php echo $form->textField($model,'trader',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'trader'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'saleperson'); ?>
		<?php echo $form->textField($model,'saleperson',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'saleperson'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->