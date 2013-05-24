<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'procurement-form',
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
		<?php echo $form->labelEx($model,'suplier_id'); ?>
		<?php echo $form->textField($model,'suplier_id'); ?>
		<?php echo $form->error($model,'suplier_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type_order'); ?>
		<?php echo $form->textField($model,'type_order'); ?>
		<?php echo $form->error($model,'type_order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shipping_id'); ?>
		<?php echo $form->textField($model,'shipping_id'); ?>
		<?php echo $form->error($model,'shipping_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->