<?php
/* @var $this LCurrencyController */
/* @var $model lCurrency */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'l-currency-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'currency_pair'); ?>
		<?php echo $form->textField($model,'currency_pair',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'currency_pair'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decimals'); ?>
		<?php echo $form->textField($model,'decimals',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'decimals'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->