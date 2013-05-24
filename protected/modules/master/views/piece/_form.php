<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'piece-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'piece_name'); ?>
		<?php echo $form->textField($model,'piece_name',array('size'=>45,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'piece_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->