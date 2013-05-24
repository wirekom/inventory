<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'order-type-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'order_name'); ?>
		<?php echo $form->textField($model,'order_name',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'order_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->