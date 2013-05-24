<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seller-components-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'decsription'); ?>
		<?php echo $form->textArea($model,'decsription',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'decsription'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'component_id'); ?>
		<?php echo $form->textField($model,'component_id'); ?>
		<?php echo $form->error($model,'component_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_order'); ?>
		<?php echo $form->textField($model,'type_order'); ?>
		<?php echo $form->error($model,'type_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sender_name'); ?>
		<?php echo $form->textArea($model,'sender_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'sender_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->